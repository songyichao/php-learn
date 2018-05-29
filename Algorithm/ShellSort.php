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

namespace Algorithm;


class ShellSort
{
    public static function shellSort($arr)
    {
        $total = count($arr);
        $dk = floor($total / 2);
        while ($dk >= 1) {
            for ($i = $dk; $i < $total; $i++) {
                if ($arr[$i] < $arr[$i - $dk]) {
                    $j = $i - $dk;
                    $x = $arr[$i];
                    $arr[$i] = $arr[$i - $dk];
                    while ($j >= 0 && $x < $arr[$j]) {
                        $arr[$j + $dk] = $arr[$j];
                        $j -= $dk;
                    }
                    $arr[$j + $dk] = $x;
                }
            }
            $dk = floor($dk / 2);
        }

        return $arr;
    }
}