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


class Client
{
    private $hot_date;

    public function __construct()
    {
        $this->hot_date = new Female();
        $this->hot_date->setAge('Age Group 4');
        echo $this->hot_date->getAge();
        $this->hot_date = $this->wrapComponent($this->hot_date);
        echo $this->hot_date->getFeature();
    }

    public function wrapComponent(IComponent $component)
    {
        $component = new ProgramLang($component);
        $component->setFeature('php');
        $component = new Hardware($component);
        $component->setFeature('lin');
        $component = new Food($component);
        $component->setFeature('veg');

        return $component;
    }
}