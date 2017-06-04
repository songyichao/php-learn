<?php

//htmlentities()
$input = '<p><script>alert("You won the Nigerian lottery");</script></p>';

echo htmlentities($input, ENT_QUOTES, 'UTF-8');
echo '<br>';

//filter_var()
$email = 'john@exampl:e.com';
$emailSafe = filter_var($email, FILTER_SANITIZE_EMAIL);
echo $emailSafe;
echo '<br>';

$string = '\nIāáǎàōīǚňǖùɡ½Πδυ';
$safeString = filter_var($string, FILTER_SANITIZE_STRING,
    FILTER_FLAG_ENCODE_LOW | FILTER_FLAG_ENCODE_HIGH);
echo $safeString;
echo '<br>';
//filter email

$email = 'songyichao@gmail.com';
if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
    echo 'Success';
} else {
    echo 'Fail';
}
