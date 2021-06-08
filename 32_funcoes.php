<?php

$salt = 'ajfaoNBVyuf8AMSANDB*%&';
$password = '123456';

echo 'MD5';
echo '<br>';
echo md5($password);
echo '<hr>';

echo 'SHA1';
echo '<br>';
echo shA1($password);
echo '<hr>';

echo 'CRYPT';
echo '<br>';
echo crypt($password, $salt);
echo '<hr>';

echo 'BASE 64 ENCODE';
echo '<br>';
$passwordCr = base64_encode($password);
echo $passwordCr;

echo '<hr>';
echo 'BASE 65 DECODE';
echo '<br>';
echo base64_decode($passwordCr);

echo '<hr>';
echo 'CODIFICAÇÃO ATRAVÉS DA FUNÇÃO CRYPTCUSTOM';
echo '<br>';
echo cryptCustom($password);

function cryptCustom(String $value):String
{
    $hash = crypt($value, 'sadaskdbaIBUIGPIYU374#5dfa');
    $hash = md5($hash);
    $hash = sha1($hash);
    $hash = hash('512', $value);

    return $hash;
};

