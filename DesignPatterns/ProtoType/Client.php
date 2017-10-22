<?php
/**
 * Created by PhpStorm.
 * User: yichaosong
 * Date: 2017/9/11
 * Time: 上午12:11
 */

namespace DesignPatterns\ProtoType;


class Client
{
    private $fly1;
    private $fly2;

    private $c1_fly;
    private $c2_fly;
    private $update_clone_fly;

    public function __construct()
    {
        $this->fly1 = new MaleProto();
        $this->fly2 = new FemaleProto();

        $this->c1_fly = clone $this->fly1;
        $this->c2_fly = clone $this->fly2;
        $this->update_clone_fly = clone $this->fly2;
        //更新克隆
        $this->c1_fly->mated = 'true';
        $this->c2_fly->fecundity = '186';
        $this->update_clone_fly->eye_color = 'purple';
        $this->update_clone_fly->wing_beat = '220';
        $this->update_clone_fly->unit_eyes = '750';
        $this->update_clone_fly->fecundity = '92';
        //通过类型提示方法发送
        $this->showFly($this->c1_fly);
        $this->showFly($this->c2_fly);
        $this->showFly($this->update_clone_fly);
    }

    public function showFly(IProtoType $fly)
    {
        echo 'Eye color:', $fly->eye_color, PHP_EOL;
        echo 'Wing Beats/second:', $fly->wing_beat, PHP_EOL;
        echo 'Eys units:', $fly->unit_eyes, PHP_EOL;
        $gender_now = $fly::gender;
        echo 'Gender:', $gender_now, PHP_EOL;
        if ($gender_now === 'FEMALE') {
            echo 'Number of eggs:' . $fly->fecundity, PHP_EOL;
        } else {
            echo 'Mated:', $fly->mated, PHP_EOL;
        }
    }
}