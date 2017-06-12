<?php

$pdo = new PDO(
    'mysql:host=127.0.0.1;dbname=test;port=3306;charset=utf-8',
    'username',
    'password');

$sql = 'SELECT id FROM user WHERE email = :email';

$statement = $pdo->prepare($sql);

$email = filter_input(INPUT_GET, 'email');

$statement->bindValue(':email', $email);

$statement->bindParam(':email', $email);

$statement->execute();

while ($res = $statement->fetch(PDO::FETCH_ASSOC) !== false) {
    echo $res['id'];
}