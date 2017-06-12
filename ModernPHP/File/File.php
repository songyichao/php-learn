<?php

//使用file_get_contents()发起get/post请求

//get
$response = file_get_contents('http://php.net/manual/zh/function.file.php');
//echo $response;

//过滤器

$handle = fopen('../Filter/Filter.php', 'rb');
stream_filter_append($handle, 'string.toupper');
while (feof($handle) !== true) {
    echo fgets($handle);
}
fclose($handle);