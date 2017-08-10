<?php
/**
 * 文本
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
 * 文本
 *
 * @category   Learn
 * @package    PSR
 * @subpackage Documentation\API
 * @author     yichaosong  <songyichao@gmail.com>
 * @license    GPL https://songyichao.com
 * @link       https://songyichao.com
 */
class TextProduct implements Product
{

    private $mfgProduct;

    /**
     * 获取特性
     *
     * @return mixed
     */
    public function getProperties()
    {
        // TODO: Implement getProperties() method.
        $this->mfgProduct = 'text';

        return $this->mfgProduct;
    }
}