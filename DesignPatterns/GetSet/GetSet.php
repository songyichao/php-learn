<?php
/**
 * A Learn GetSet
 *
 * @category   Learn
 * @package    PSR
 * @subpackage Documentation\API
 * @author     yichaosong  <songyichao@gmail.com>
 * @license    GPL https://songyichao.com
 * @link       https://songyichao.com
 */

/**
 * A file in the file system.
 */
class GetSet
{
    private $tool;

    public function __construct()
    {
        $this->setTool('Car');
        $tools = $this->getTool();
        echo $tools;
    }

    /**
     * @return mixed
     */
    public function getTool()
    {
        return $this->tool;
    }

    /**
     * @param mixed $tool
     * @return GetSet
     */
    public function setTool($tool)
    {
        $this->tool = $tool;

        return $this;
    }
}

$tool = new GetSet();
