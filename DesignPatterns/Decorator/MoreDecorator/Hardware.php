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


class Hardware extends Decorator
{
    private $hardware_now;

    public function __construct(IComponent $date_now)
    {
        $this->date = $date_now;
    }

    private $hardware = [
        'mac' => 'Apple',
        'dell' => 'DELL',
        'hp' => 'HP',
        'lin' => 'linux',
    ];

    public function getFeature()
    {
        // TODO: Implement getFeature() method.
        $output = $this->date->getFeature();
        $fmt = '<br/>&nbsp;&nbsp;';
        $output .= $fmt . 'Current  Hardware:';
        $output .= $this->hardware_now;

        return $output;
    }

    public function setFeature($fea)
    {
        // TODO: Implement setFeature() method.
        $this->hardware_now = $this->hardware[$fea];
    }
}