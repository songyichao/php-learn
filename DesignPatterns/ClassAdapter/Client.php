<?php
/**
 * 适配器模式
 * 用于不同结构相同数据的处理
 *
 * @category   Learn
 * @package    PSR
 * @subpackage Documentation\API
 * @author     yichaosong  <songyichao@gmail.com>
 * @license    GPL https://songyichao.com
 * @link       https://songyichao.com
 */

namespace DesignPatterns\ClassAdapter;


class Client
{
    private $request_now;
    private $dollar_request;

    public function __construct()
    {
        $this->request_now = new EuroAdapter();
        $this->dollar_request = new DollarCalc();
        $euro = '&#8364;';
        echo 'Euro:' . $euro . $this->makeAdapterRequest($this->request_now) . PHP_EOL;
        echo 'Dollar:$' . $this->makeDollarRequest($this->dollar_request);
    }

    public function makeAdapterRequest(ITarget $req)
    {
        return $req->requestCalc(40, 50);
    }

    public function makeDollarRequest(DollarCalc $req)
    {
        return $req->requestCalc(40, 50);
    }
}