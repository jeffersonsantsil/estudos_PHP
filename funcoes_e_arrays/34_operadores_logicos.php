<?php

$a = 2;
$b = 2;


if ($a == $b AND /*&&*/  $a == 3){
    echo 'No IF';
}else{
    echo 'No Else';
}

echo '<hr>';

if ($a == $b OR /*||*/ $a == 2){
    echo 'No IF';
}else{
    echo 'No Else';
}