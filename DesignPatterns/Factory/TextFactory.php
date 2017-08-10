<?php
/**
 * TextFactory 文本工厂
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
 * TextFactory 文本工厂
 *
 * @category   Learn
 * @package    PSR
 * @subpackage Documentation\API
 * @author     yichaosong  <songyichao@gmail.com>
 * @license    GPL https://songyichao.com
 * @link       https://songyichao.com
 */
class TextFactory extends Creator
{

    /**
     * 抽象方法
     *
     * @return mixed
     */
    protected function factoryMethod()
    {
        // TODO: Implement factoryMethod() method.
        $product = new TextProduct();

        return $product->getProperties();
    }
}