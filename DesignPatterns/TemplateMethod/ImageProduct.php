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


class ImageProduct implements Product
{
    private $img_product;

    public function getProperties()
    {
        // TODO: Implement getProperties() method.
        $this->img_product = '<img src="https://gss2.bdstatic.com/-fo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike80%2C5%2C5%2C80%2C26/sign=efca4ecac9177f3e0439f45f11a650a2/0bd162d9f2d3572c2fdd40a08a13632762d0c38b.jpg">';

        return $this->img_product;
    }
}