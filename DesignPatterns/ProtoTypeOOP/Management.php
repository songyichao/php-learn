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


class Management extends IAcmeProtoType
{
    const UNIT = 'Management';
    private $research = '$research';
    private $plan = 'planning';
    private $operations = 'operations';

    function setDept($org_code)
    {
        // TODO: Implement setDept() method.
        switch ($org_code) {
            case 201:
                $this->dept = $this->research;
                break;
            case 202:
                $this->dept = $this->plan;
                break;
            case 203:
                $this->dept = $this->operations;
                break;
            default:
                $this->dept = 'Unrecognized Management';
        }
    }

    function getDept()
    {
        // TODO: Implement getDept() method.
        return $this->dept;
    }

    function _clone()
    {
        // TODO: Implement _clone() method.
    }
}