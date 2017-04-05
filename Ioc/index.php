<?php
/**
 * Created by PhpStorm.
 * User: MIOJI
 * Date: 2017/4/5
 * Time: 上午9:35
 */
require_once 'Container.php';

use Ioc\Container;

$app = new Container();

$app->bind('Visit', 'train');
$app->bind('traveller', 'Traveller');

$tra = $app->make('traveller');

$tra->visitTibet();