<?php
/**
 * 冒泡排序
 *
 * @category   Learn
 * @package    PSR
 * @subpackage Documentation\API
 * @author     yichaosong  <songyichao@gmail.com>
 * @license    GPL https://songyichao.com
 * @link       https://songyichao.com
 */

namespace Algorithm;


class BubbleSort
{
    public static function bubbleSort(array $arr)
    {
        if (empty($arr)) {
            return $arr;
        }
        $total = count($arr) - 1;
        for ($i = 0; $i < $total; $i++) {
            for ($j = 0; $j < $total - $i; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    Client::swap($arr, $j, $j + 1);
                }
            }
        }

        return $arr;
    }
}