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


class QuickSort
{
    public static function partition(array &$arr, $l, $r)
    {
        $pivot_key = $arr[$l];
        //优化前
//        $pivot_pointer = $l;
        while ($l < $r) {
            while ($l < $r && $arr[$r] >= $pivot_key) {
                $r--;
            }
            //优化后
            $arr[$l] = $arr[$r];
            while ($l < $r && $arr[$l] <= $pivot_key) {
                $l++;
            }
            //优化后
            $arr[$r] = $arr[$l];
            //优化前
//            Client::swap($arr, $l, $r);
        }
        //优化前
//        Client::swap($arr, $pivot_pointer, $l);
        //优化后
        $arr[$l] = $pivot_key;

        return $l;
    }

    public static function sort(array $arr, $l, $r)
    {
        if ($l > $r) {
            return $arr;
        }
        $pivot_pos = self::partition($arr, $l, $r);
        $arr = self::sort($arr, $l, $pivot_pos - 1);
        $arr = self::sort($arr, $pivot_pos + 1, $r);

        return $arr;
    }

    public static function quickSort($arr)
    {
        return self::sort($arr, 0, count($arr) - 1);
    }
}