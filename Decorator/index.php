<?php
/**
 * Created by PhpStorm.
 * User: MIOJI
 * Date: 2017/4/6
 * Time: 上午9:00
 */
require_once 'XiaoFang.php';
require_once 'Shoes.php';
require_once 'Skirt.php';
require_once 'Fire.php';

use Decorator\Fire;
use Decorator\Shoes;
use Decorator\Skirt;
use Decorator\XiaoFang;

$xiaoFang = new XiaoFang('小芳');

$shoes = new Shoes($xiaoFang);

$skirt = new Skirt($shoes);

$fire = new Fire($skirt);

$fire->display();