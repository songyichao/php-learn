<?php
/**
 * 选择排序
 *  选出最小的元素放到最前面 0(n^2)
 *
 * @category   Learn
 * @package    PSR
 * @subpackage Documentation\API
 * @author     yichaosong  <songyichao@gmail.com>
 * @license    GPL https://songyichao.com
 * @link       https://songyichao.com
 */

namespace Algorithm;


class SelectSort
{
    public static function selectSort($arr)
    {
        $total = count($arr);
        for ($i = 0; $i <= $total; $i++) {
            $min_key = $i;
            for ($j = $i + 1; $j < $total; $j++) {
                if ($arr[$j] < $arr[$min_key]) {
                    $min_key = $j;
                }
            }
            if ($min_key !== $i) {
                Client::swap($arr, $min_key, $i);
            }
        }

        return $arr;
    }
}