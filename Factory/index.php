<?php
/**
 * Created by PhpStorm.
 * User: yichaosong
 * Date: 2017/4/3
 * Time: 下午3:34
 */
require_once 'Traveller.php';

use Factory\Traveller;

$traffic_tool = $_GET['tool'];


$tra = new Traveller($traffic_tool);

$tra->visitTibet();