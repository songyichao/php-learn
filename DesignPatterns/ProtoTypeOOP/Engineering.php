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


class Engineering extends IAcmeProtoType
{
    const UNIT = 'Engineering';
    private $development = 'programming';
    private $design = 'digital artwork';
    private $sys_ad = 'system administration';

    function setDept($org_code)
    {
        // TODO: Implement setDept() method.
        switch ($org_code) {
            case 301:
                $this->dept = $this->development;
                break;
            case 302:
                $this->dept = $this->design;
                break;
            case 303:
                $this->dept = $this->sys_ad;
                break;
            default:
                $this->dept = 'Unrecognized Engineering';
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