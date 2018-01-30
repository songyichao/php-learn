<?php
/**
 * 模板方法模式
 * 好莱坞原则、幼儿园原则：不允许控制反向
 *
 * @category   Learn
 * @package    PSR
 * @subpackage Documentation\API
 * @author     yichaosong  <songyichao@gmail.com>
 * @license    GPL https://songyichao.com
 * @link       https://songyichao.com
 */

namespace DesignPatterns\TemplateMethod;


class Client
{
    public function __construct()
    {
        $mo = new TmFac();
        $mo->templateMethod();
    }
}