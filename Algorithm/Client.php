<?php
/**
 * 客户类
 * 工厂方法设计模式
 * 适用场景: 实例化的对象的子类可能发生变化的时候使用
 *
 * @category   Learn
 * @package    PSR
 * @subpackage Documentation\API
 * @author     yichaosong  <songyichao@gmail.com>
 * @license    GPL https://songyichao.com
 * @link       https://songyichao.com
 */

namespace Algorithm;

/**
 * 客户类
 *
 * @category   Learn
 * @package    PSR
 * @subpackage Documentation\API
 * @author     yichaosong  <songyichao@gmail.com>
 * @license    GPL https://songyichao.com
 * @link       https://songyichao.com
 */
class Client
{
    /**
     * 构造方法
     *
     * Client constructor.
     */
    public function __construct()
    {
        $arr = [6, 5, 3, 1, 8, 7, 2, 4];
        echo '冒泡排序' . PHP_EOL;
        $sort_arr = BubbleSort::bubbleSort($arr);
        var_dump($sort_arr);
        echo '选择排序' . PHP_EOL;
        $sort_arr = SelectSort::selectSort($arr);
        var_dump($sort_arr);
        echo '插入排序' . PHP_EOL;
        $sort_arr = InsertSort::insertSort($arr);
        var_dump($sort_arr);
    }

    public static function swap(&$arr, $i, $j)
    {
        $temp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $temp;
    }
}
