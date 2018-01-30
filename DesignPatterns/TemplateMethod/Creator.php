<?php
/**
 * 工厂参与者
 *
 * @category   Learn
 * @package    PSR
 * @subpackage Documentation\API
 * @author     yichaosong  <songyichao@gmail.com>
 * @license    GPL https://songyichao.com
 * @link       https://songyichao.com
 */

namespace DesignPatterns\TemplateMethod;


abstract class Creator
{
    protected abstract function factoryMethod();

    public function doFactory()
    {
        $product = $this->factoryMethod();

        return $product;
    }
}