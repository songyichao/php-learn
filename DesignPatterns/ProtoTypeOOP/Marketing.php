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


class Marketing extends IAcmeProtoType
{
    const UNIT = 'Marketing';
    private $sales = 'sales';
    private $promotion = 'promotion';
    private $strategic = 'strategic planning';

    function setDept($org_code)
    {
        // TODO: Implement setDept() method.
        switch ($org_code) {
            case 101;
                $this->dept = $this->sales;
                break;
            case 102:
                $this->dept = $this->promotion;
                break;
            case 103:
                $this->dept = $this->strategic;
                break;
            default:
                $this->dept = 'Unrecognized Marketing';
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