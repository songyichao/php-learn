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

class BasicSite extends IComponent
{
    public function __construct()
    {
        $this->site = 'Basic Site';
    }

    public function getSite()
    {
        // TODO: Implement getSite() method.
        return $this->site;
    }

    public function getPrice()
    {
        // TODO: Implement getPrice() method.
        return 1200;
    }
}