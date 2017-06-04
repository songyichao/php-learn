<?php
//哈希加密
$password = password_hash('songyichao', PASSWORD_DEFAULT, ['cost' => 12]);
echo $password;
echo '<br>';
//验证
echo password_verify('songyichao', $password);

echo '<br>';

$pwd_mode = PASSWORD_DEFAULT;
$pwd_option = ['cost' => 13];
//是否重新计算
$pwd_rehash = password_needs_rehash($password, $pwd_mode, $pwd_option);
echo $pwd_rehash;