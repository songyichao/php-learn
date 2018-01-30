<?php
/**
 * description
 *
 * @category   Learn
 * @package    PSR
 * @subpackage Documentation\API
 * @author     yichaosong  <songyichao@gmail.com>
 * @license    GPL https://songyichao.com
 * @link       https://songyichao.com
 */

namespace DesignPatterns\TemplateMethod;


class TextProduct implements Product
{
    private $text_product;
    public function getProperties()
    {
        // TODO: Implement getProperties() method.
        $this->text_product = '月全食';
        return $this->text_product;
    }
}