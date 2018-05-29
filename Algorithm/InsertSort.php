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


class InsertSort
{
    public static function insertSort($arr)
    {
        $total = count($arr);
        for ($i = 1; $i < $total; $i++) {
            $j = $i;
            $x = $arr[$i];
            while ($j > 0 && $x < $arr[$j - 1]) {
                $arr[$j] = $arr[$j - 1];
                $j--;
            }
            $arr[$j] = $x;
        }

        return $arr;
    }
}