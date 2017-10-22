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


abstract class IAcmeProtoType
{
    protected $name;
    protected $id;
    protected $employee_pic;
    protected $dept;

    abstract function setDept($org_code);

    abstract function getDept();

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $employee_pic
     */
    public function setEmployeePic($employee_pic)
    {
        $this->employee_pic = $employee_pic;
    }

    /**
     * @return mixed
     */
    public function getEmployeePic()
    {
        return $this->employee_pic;
    }

    abstract function _clone();
}