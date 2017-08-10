<?php
/**
 * Creator接口
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
 * Creator接口 抽象对象做接口
 *
 * @category   Learn
 * @package    PSR
 * @subpackage Documentation\API
 * @author     yichaosong  <songyichao@gmail.com>
 * @license    GPL https://songyichao.com
 * @link       https://songyichao.com
 */

abstract Class Creator
{
    /**
     * 抽象方法
     *
     * @return mixed
     */
    protected abstract function factoryMethod();

    /**
     * 返回产品对象
     *
     * @return mixed
     */
    public function startFactory()
    {
        $mfg = $this->factoryMethod();

        return $mfg;
    }
}