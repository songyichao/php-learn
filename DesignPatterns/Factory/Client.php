<?php
/**
 * 客户类
 *
 * @category   Learn
 * @package    PSR
 * @subpackage Documentation\API
 * @author     yichaosong  <songyichao@gmail.com>
 * @license    GPL https://songyichao.com
 * @link       https://songyichao.com
 */

namespace DesignPatterns\Factory;

/**
 * 客户类
 *
 * @category   Learn
 * @package    PSR
 * @subpackage Documentation\API
 * @author     yichaosong  <songyichao@gmail.com>
 * @license    GPL https://songyichao.com
 * @link       https://songyichao.com
 */
class Client
{
    private $some_graphic_object;
    private $some_text_object;
    private $country_factory;

    /**
     * 构造方法
     *
     * Client constructor.
     */
    public function __construct()
    {
//        $this->some_graphic_object = new GraphicFactory();
//        echo $this->some_graphic_object->startFactory(), '<br/>';
//        $this->some_text_object = new TextFactory();
//        echo $this->some_text_object->startFactory(), '<br/>';
        $this->country_factory = new CountryFactory();
        echo $this->country_factory->doFactory(new TextProduct());
    }
}
