<?php
/**
 * A IAbstract
 *
 * @category   Learn
 * @package    PSR
 * @subpackage Documentation\API
 * @author     yichaosong  <songyichao@gmail.com>
 * @license    GPL https://songyichao.com
 * @link       https://songyichao.com
 */

namespace DesignPatterns\IAbstract;

/**
 * A IAbstract test.
 *
 * @category   Learn
 * @package    PSR
 * @subpackage Documentation\API
 * @author     yichaosong  <songyichao@gmail.com>
 * @license    GPL https://songyichao.com
 * @link       https://songyichao.com
 */
abstract class IAbstract
{
    protected $value_now;

    /**
     * 获取费用
     *
     * @return mixed
     */
    abstract protected function giveCost();

    /**
     * 获取城市
     *
     * @return mixed
     */
    abstract protected function giveCity();

    /**
     * 展示内容
     *
     * @return string
     */
    public function displayShow()
    {
        $string_cost = $this->giveCost();
        $string_cost = (string)$string_cost;
        $all_together = ('Cost: $' . $string_cost . 'for' . $this->giveCity());

        return $all_together;
    }
}