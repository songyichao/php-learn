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

namespace DesignPatterns\TemplateMethod;


abstract class TmAb
{
    protected $pix;
    protected $cap;

    public function templateMethod()
    {
        $this->addPix();
        $this->addCap();
    }

    protected abstract function addPix();

    protected abstract function addCap();
}