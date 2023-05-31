<?php

$cart = [
    0 =>'Macarrão',
    1 =>'Arroz',
    2 =>'Leite',
    3 =>'Nescau',
    4 =>'Fralda'
];

//AJUSTA OS VALUES DO ARRAY EM ORDEM ALFABETICA REVERSA
echo '<pre>';
arsort($cart);
var_dump($cart);
echo'<hr>';

//AJUSTA OS VALUES DO ARRAY EM ORDEM ALFABETICA
echo '<pre>';
asort($cart);
var_dump($cart);
echo'<hr>';

//AJUSTA AS KEYS E VALUES DO ARRAY EM ORDEM ALFABETICA
echo '<pre>';
sort($cart);
var_dump($cart);
echo'<hr>';