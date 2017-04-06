<?php
/**
 * Created by PhpStorm.
 * User: MIOJI
 * Date: 2017/4/6
 * Time: 上午8:53
 */

namespace Decorator;

require_once 'Decorator.php';

class Finery implements Decorator
{
    private $component;

    public function __construct($component)
    {
        $this->component = $component;
    }

    public function display()
    {
        // TODO: Implement display() method.

        $this->component->display();
    }
}