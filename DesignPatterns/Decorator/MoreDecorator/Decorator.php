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


abstract class Decorator extends IComponent
{
    public function setAge($age_now)
    {
        $this->age_group = $age_now;
    }

    public function getAge()
    {
        return $this->age_group;
    }
}