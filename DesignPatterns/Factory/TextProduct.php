<?php
/**
 * 文本
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
 * 文本
 *
 * @category   Learn
 * @package    PSR
 * @subpackage Documentation\API
 * @author     yichaosong  <songyichao@gmail.com>
 * @license    GPL https://songyichao.com
 * @link       https://songyichao.com
 */
class TextProduct implements Product
{

    private $mfgProduct;

    /**
     * 获取特性
     *
     * @return mixed
     */
    public function getProperties()
    {
        // TODO: Implement getProperties() method.
        $this->mfgProduct = <<<MALI
        <!doctype html>
        <html xmlns="http://www.w3.org/1999/html"><head>
        <style type="text/css">
        header{
            color: #900;
            font-weight: bold;
            font-size: 24px;
        }
        </style>
        <meta charset="UTF-8"></head>
        <header>Mail</header>
        <body>
        <p>我是一段文本</p>
        </body></html>
MALI;

        return $this->mfgProduct;
    }
}