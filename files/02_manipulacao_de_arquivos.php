<?php

$contet = 'Qual quer coisa digitada';
$file = 'teste.txt';

if (file_exists($file)){
    //file_put_contents($file, $contet);
    var_dump(file_get_contents($file));
}   else{
    echo 'Esse arquivo não existe';
}