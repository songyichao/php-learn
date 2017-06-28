<?php
/**
 * 连接两个类
 *
 * @category   Learn
 * @package    PSR
 * @subpackage Documentation\API
 * @author     yichaosong  <songyichao@gmail.com>
 * @license    GPL https://songyichao.com
 * @link       https://songyichao.com
 */

use DesignPatterns\IAbstract\IAbstract;

require_once 'NorthRegion.php';
require_once 'WestRegion.php';

/**
 * 实现两个类.
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
    /**
     * Client constructor.
     */
    public function __construct()
    {
        $north = new NorthRegion();
        $west = new WestRegion();
        $this->showInterFace($north);
        $this->showInterFace($west);
    }

    /**
     * 展示接口
     *
     * @param IAbstract $region
     */
    private function showInterFace(IAbstract $region)
    {
        echo $region->displayShow() . '<br/>';
    }
}

$work = new Client();
