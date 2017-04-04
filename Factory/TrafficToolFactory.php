<?php
/**
 * Created by PhpStorm.
 * User: yichaosong
 * Date: 2017/4/3
 * Time: 下午3:20
 */

namespace Factory;

require_once 'Leg.php';
require_once 'Car.php';
require_once 'Train.php';

class TrafficToolFactory
{
    public function createTrafficTool($name)
    {
        switch ($name) {
            case 'Leg':
                return new Leg();
                break;
            case 'Car':
                return new Car();
                break;
            case 'Train':
                return new Train();
                break;
            default:
                exit('set trafficTool error!');
                break;
        }
    }
}