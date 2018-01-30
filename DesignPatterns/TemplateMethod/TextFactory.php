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


class TextFactory extends Creator
{

    protected function factoryMethod()
    {
        // TODO: Implement factoryMethod() method.
        $product = new TextProduct();

        return $product->getProperties();
    }
}