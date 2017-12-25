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

namespace DesignPatterns\Decorator\MoreDecorator;


class Male extends IComponent
{

    public function __construct()
    {
        $this->date = 'Male';
        $this->setFeature('<br/>Dude programmer feature:');
    }

    public function setAge($age_now)
    {
        // TODO: Implement setAge() method.
        $this->age_group = $age_now;
    }

    public function getAge()
    {
        // TODO: Implement getAge() method.
        return $this->age_group;
    }

    public function getFeature()
    {
        // TODO: Implement getFeature() method.
        return $this->feature;
    }

    public function setFeature($fea)
    {
        // TODO: Implement setFeature() method.
        $this->feature = $fea;
    }
}