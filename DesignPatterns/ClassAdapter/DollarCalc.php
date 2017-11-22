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

namespace DesignPatterns\ClassAdapter;


class DollarCalc
{
    private $dollar;
    private $product;
    private $service;
    public $rate = 1;

    public function requestCalc($product_now, $service_now)
    {
        $this->product = $product_now;
        $this->service = $service_now;
        $this->dollar = $this->product + $this->service;

        return $this->requestTotal();
    }

    public function requestTotal()
    {
        $this->dollar *= $this->rate;

        return $this->dollar;
    }
}