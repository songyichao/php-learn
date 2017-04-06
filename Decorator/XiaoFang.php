<?php
/**
 * Created by PhpStorm.
 * User: MIOJI
 * Date: 2017/4/6
 * Time: 上午8:51
 */

namespace Decorator;

require_once 'Decorator.php';


class XiaoFang implements Decorator
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function display()
    {
        // TODO: Implement display() method.

        echo '我是' . $this->name . '我出门了<br>';
    }
}