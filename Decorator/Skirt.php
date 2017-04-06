<?php
/**
 * Created by PhpStorm.
 * User: MIOJI
 * Date: 2017/4/6
 * Time: 上午8:57
 */

namespace Decorator;

require_once 'Finery.php';

class Skirt extends Finery
{
    public function display()
    {
        echo '穿上裙子<br>';
        parent::display();
    }
}