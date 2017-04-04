<?php
/**
 * Created by PhpStorm.
 * User: yichaosong
 * Date: 2017/4/3
 * Time: 下午3:26
 */

namespace Factory;

require_once 'Visit.php';


class Car implements Visit
{

    public function go()
    {
        // TODO: Implement go() method.
        echo 'drive car to Tibet';
    }
}