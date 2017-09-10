<?php
/**
 * Created by PhpStorm.
 * User: yichaosong
 * Date: 2017/9/10
 * Time: 下午11:56
 */

namespace DesignPatterns\ProtoType;


abstract class IProtoType
{
    public $eye_color;
    public $wing_beat;
    public $unit_eyes;
    abstract function __clone();
}
