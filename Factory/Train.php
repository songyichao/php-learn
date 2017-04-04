<?php
/**
 * Created by PhpStorm.
 * User: yichaosong
 * Date: 2017/4/3
 * Time: 下午3:27
 */

namespace Factory;

require_once 'Visit.php';

class Train implements Visit
{

    public function go()
    {
        // TODO: Implement go() method.
        echo 'go to Tibet by train';
    }
}