<?php
/**
 * 装饰器设计模式
 *
 *
 * @category   Learn
 * @package    PSR
 * @subpackage Documentation\API
 * @author     yichaosong  <songyichao@gmail.com>
 * @license    GPL https://songyichao.com
 * @link       https://songyichao.com
 */

namespace DesignPatterns\Decorator;


class Client
{
    private $basic_site;

    public function __construct()
    {
        $this->basic_site = new BasicSite();
        $this->basic_site = $this->wrapComponent($this->basic_site);
        $site_show = $this->basic_site->getSite();
        $format = '<br/>&nbsp;&nbsp;<strong>Total= $';
        $price = $this->basic_site->getPrice();
        echo $site_show . $format . $price . '</strong>';
    }

    public function wrapComponent(IComponent $component)
    {
        $component = new Maintenance($component);
        $component = new Video($component);
        $component = new Database($component);

        return $component;
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