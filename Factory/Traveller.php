<?php
/**
 * Created by PhpStorm.
 * User: yichaosong
 * Date: 2017/4/3
 * Time: 下午3:30
 */

namespace Factory;

require_once 'TrafficToolFactory.php';

class Traveller
{
    protected $traffic_tool;

    public function __construct($traffic_tool)
    {
        $factory = new TrafficToolFactory();

        $this->traffic_tool = $factory->createTrafficTool($traffic_tool);
    }

    public function visitTibet()
    {
        $this->traffic_tool->go();
    }
}