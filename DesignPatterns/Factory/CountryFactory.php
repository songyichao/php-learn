<?php
/**
 * Country工厂类
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
 * Country工厂类
 *
 * @category   Learn
 * @package    PSR
 * @subpackage Documentation\API
 * @author     yichaosong  <songyichao@gmail.com>
 * @license    GPL https://songyichao.com
 * @link       https://songyichao.com
 */
class CountryFactory extends Creator
{
    private $country;

    /**
     * 抽象方法
     *
     * @param Product $product
     *
     * @return mixed
     */
    protected function factoryMethod(Product $product)
    {
        // TODO: Implement factoryMethod() method.
        $this->country = $product;
        return $this->country->getProperties();
    }
}