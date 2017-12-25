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


abstract class IComponent
{
    protected $date;
    protected $age_group;
    protected $feature;

    abstract public function setAge($age_now);

    abstract public function getAge();

    abstract public function getFeature();

    abstract public function setFeature($fea);
}