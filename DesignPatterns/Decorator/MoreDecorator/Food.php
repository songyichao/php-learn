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

namespace DesignPatterns\Decorator\MoreDecorator;


class Food extends Decorator
{
    private $chow_now;

    public function __construct(IComponent $date_now)
    {
        $this->date = $date_now;
    }

    private $chow = [
        'piz' => 'Pizza',
        'burg' => 'Burgers',
        'nach' => 'Nachos',
        'veg' => 'Veggies',
    ];

    public function getFeature()
    {
        // TODO: Implement getFeature() method.
        $output = $this->date->getFeature();
        $fmt = '<br/>&nbsp;&nbsp;';
        $output .= $fmt . 'Favorite  Food:';
        $output .= $this->chow_now;

        return $output;
    }

    public function setFeature($fea)
    {
        // TODO: Implement setFeature() method.
        $this->chow_now = $this->chow[$fea];
    }
}