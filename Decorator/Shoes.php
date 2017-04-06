<?php
/**
 * Created by PhpStorm.
 * User: MIOJI
 * Date: 2017/4/6
 * Time: 上午8:55
 */

namespace Decorator;

require_once 'Finery.php';

class Shoes extends Finery
{
    public function display()
    {
        echo '穿上鞋子<br>';
        parent::display();
    }
}