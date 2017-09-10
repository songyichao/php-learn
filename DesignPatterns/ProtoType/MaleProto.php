<?php
/**
 * Created by PhpStorm.
 * User: yichaosong
 * Date: 2017/9/11
 * Time: 上午12:03
 */

namespace DesignPatterns\ProtoType;


class MaleProto extends IProtoType
{

    const gender = 'Male';
    public $mated;

    public function __construct()
    {
        $this->eye_color = 'red';
        $this->unit_eyes = '760';
        $this->wing_beat = '220';
    }

    function __clone()
    {
        // TODO: Implement __clone() method.
    }
}