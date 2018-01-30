<?php
/**
 * 具体模板方法
 *
 * @category   Learn
 * @package    PSR
 * @subpackage Documentation\API
 * @author     yichaosong  <songyichao@gmail.com>
 * @license    GPL https://songyichao.com
 * @link       https://songyichao.com
 */

namespace DesignPatterns\TemplateMethod;


class TmFac extends TmAb
{

    protected function addPix()
    {
        // TODO: Implement addPix() method.
        $this->pix = new ImageFactory();
        echo $this->pix->doFactory();
    }

    protected function addCap()
    {
        // TODO: Implement addCap() method.
        $this->cap = new TextFactory();
        echo $this->cap->doFactory();
    }
}