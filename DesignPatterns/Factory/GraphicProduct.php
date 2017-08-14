<?php
/**
 * 地图
 *
 * @category   Learn
 * @package    PSR
 * @subpackage Documentation\API
 * @author     yichaosong  <songyichao@gmail.com>
 * @license    GPL https://songyichao.com
 * @link       https://songyichao.com
 */

namespace DesignPatterns\Factory;

/**
 * 地图
 *
 * @category   Learn
 * @package    PSR
 * @subpackage Documentation\API
 * @author     yichaosong  <songyichao@gmail.com>
 * @license    GPL https://songyichao.com
 * @link       https://songyichao.com
 */
class GraphicProduct implements Product
{
    private $mfg_product;

    /**
     * 获取特性
     *
     * @return mixed
     */
    public function getProperties()
    {
        // TODO: Implement getProperties() method.
        $this->mfg_product = "<!doctype html><html><head><meta charset='UTF-8'>";
        $this->mfg_product .= "<title>Map Factory</title>";
        $this->mfg_product .= "</head><body>";
        $this->mfg_product .= "<img src='screenshot.png' width='500', height='500'>";
        $this->mfg_product .= "</body></html>";

        return $this->mfg_product;
    }
}