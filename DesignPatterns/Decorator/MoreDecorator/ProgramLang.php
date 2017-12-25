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


class ProgramLang extends Decorator
{

    private $language_now;

    public function __construct(IComponent $date_now)
    {
        $this->date = $date_now;
    }

    private $language = [
        'php' => 'PHP',
        'cs' => 'C#',
        'js' => 'JavaScript',
        'as3' => 'ActionScript 3.0',
    ];

    public function getFeature()
    {
        // TODO: Implement getFeature() method.
        $output = $this->date->getFeature();
        $fmt = '<br/>&nbsp;&nbsp;';
        $output .= $fmt . 'Preferred programmer language:';
        $output .= $this->language_now;

        return $output;
    }

    public function setFeature($lan)
    {
        // TODO: Implement setFeature() method.
        $this->language_now = $this->language[$lan];
    }
}