<?php
/**
 * 实现抽象类
 *
 * @category   Learn
 * @package    PSR
 * @subpackage Documentation\API
 * @author     yichaosong  <songyichao@gmail.com>
 * @license    GPL https://songyichao.com
 * @link       https://songyichao.com
 */

use DesignPatterns\IAbstract\IAbstract;

require_once 'IAbstract.php';

/**
 * A IAbstract 的实现.
 *
 * @category   Learn
 * @package    PSR
 * @subpackage Documentation\API
 * @author     yichaosong  <songyichao@gmail.com>
 * @license    GPL https://songyichao.com
 * @link       https://songyichao.com
 */
class NorthRegion extends IAbstract
{

    /**
     * 获取费用
     *
     * @return mixed
     */
    protected function giveCost()
    {
        // TODO: Implement giveCost() method.
        return 2222.55;
    }

    /**
     * 获取城市
     *
     * @return mixed
     */
    protected function giveCity()
    {
        // TODO: Implement giveCity() method.
        return '美国';
    }
}