<?php

function NumberGenerator()
{
    yield 0;
    yield 1;
    yield 2;
    yield 3;
    yield 4;
}

foreach (NumberGenerator() as $k => $item) {
    echo $item, PHP_EOL;
}

$a = 0;
$b = 1;
$c = 3;

echo 'num' . (isset($e) ? $e : $a + $b) . '!' . PHP_EOL;


echo 'num', isset($e) ? $e : $a + $b, '?' . PHP_EOL;
//赋值到数组中
echo '<br>';

echo memory_get_usage();
$time_a = microtime(true);
function makeRangeArr($length)
{
    $arr = [];
    for ($i = 0; $i < $length; $i++) {
        $arr[] = $i;
    }

    return $arr;
}

foreach (makeRangeArr(1000000) as $item) {
    $item++;
}
echo '<br>';
echo microtime(true) - $time_a, '<br>';
echo memory_get_usage();
echo '<br>';


//资源占有较大
$time_b = microtime(true);
//数字生成器
function makeRange($length)
{
    for ($i = 0; $i < $length; $i++) {
        yield $i;
    }
}

foreach (makeRange(1000000) as $item) {
    $item++;
}
echo '<br>';
echo memory_get_usage();
echo '<br>';

echo microtime(true) - $time_b;

//耗时较大  适合使用在异步不是实时返回的地方
