<?php
/**
 * Created by PhpStorm.
 * User: MIOJI
 * Date: 2017/4/6
 * Time: 上午8:58
 */

namespace Decorator;

require_once 'Finery.php';

class Fire extends Finery
{
    public function display()
    {
        echo '出门前先整理头发';
        parent::display();
        echo '出门后再整理一下头发';
    }
}