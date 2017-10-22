<?php
/**
 * description
 *
 * @category   Learn
 * @package    PSR
 * @subpackage Documentation\API
 * @author     yichaosong  <songyichao@gmail.com>
 * @license    GPL https://songyichao.com
 * @link       https://songyichao.com
 */

namespace DesignPatterns\ProtoTypeOOP;


class Client
{
    private $market;
    private $manage;
    private $engineer;

    public function __construct()
    {
        $this->makeConProto();
        $tess = clone $this->market;
        $this->setEmployee($tess, 'syc', 101, 'ts101_1234');
        $this->showEmployee($tess);

        $jacob = clone $this->market;
        $this->setEmployee($jacob, 'sy', 102, 'jj102_2234');
        $this->showEmployee($jacob);

        $lgc = clone $this->manage;
        $this->setEmployee($lgc, 'lgc', 203, 'lgc203-2342');
        $this->showEmployee($lgc);

        $syc = clone $this->engineer;
        $this->setEmployee($syc, 'syc', 301, 'syc301-3301');
        $this->showEmployee($syc);

        $tt = clone $this->engineer;
        $this->setEmployee($tt, 'tt', 302, 'tt302_3302');
        $this->showEmployee($tt);
    }

    public function makeConProto()
    {
        $this->market = new Marketing();
        $this->manage = new Management();
        $this->engineer = new Engineering();
    }

    private function showEmployee(IAcmeProtoType $employee_now)
    {
        echo $employee_now->getName() . PHP_EOL;
        echo $employee_now->getDept() . ': ', $employee_now::UNIT . PHP_EOL;
        echo $employee_now->getId(), PHP_EOL;
    }

    private function setEmployee(IAcmeProtoType $employee_now, $nm, $dp, $id)
    {
        $employee_now->setName($nm);
        $employee_now->setDept($dp);
        $employee_now->setId($id);
    }
}