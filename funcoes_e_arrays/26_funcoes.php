<?php
/* SEPARA A STRING E TRANSFORA EM UM ARRAY
$state = 'Vitória de Santo Antão/PE';

$arrayState = explode('/', $state);

var_dump($arrayState[1]);
*/


//TRANSFORMA O ARRAY EM UMA STRING
$info = 'Vitória de Santo Antão/PE/Brasil/Terra';

$arrayInfo = explode('/', $info);

var_dump($arrayInfo);

echo '<hr>';

echo implode($arrayInfo, '-');