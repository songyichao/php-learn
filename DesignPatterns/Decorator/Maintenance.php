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

namespace DesignPatterns\Decorator;

class Maintenance extends Decorator
{

    public function __construct(IComponent $site_now)
    {
        $this->site = $site_now;
    }

    public function getSite()
    {
        // TODO: Implement getSite() method.
        $fmat = '<br/>&nbsp;&nbsp;Maintenance';

        return $this->site->getSite() . $fmat;
    }

    public function getPrice()
    {
        // TODO: Implement getPrice() method.
        return 950 + $this->site->getPrice();
    }
}