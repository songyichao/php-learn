<?php
/**
 * Created by PhpStorm.
 * User: yichaosong
 * Date: 2017/9/11
 * Time: 上午12:07
 */

namespace DesignPatterns\ProtoType;


class FemaleProto extends IProtoType
{
    const gender = 'FEMALE';
    public $fecundity;

    public function __construct()
    {
        $this->eye_color = 'red';
        $this->wing_beat = '220';
        $this->unit_eyes = '760';
    }

    function __clone()
    {
        // TODO: Implement __clone() method.
    }
}