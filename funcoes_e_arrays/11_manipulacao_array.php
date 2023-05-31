<?php

$ages = [12, 14, 16, 22, 30, 54, 32, 55, 18];

//LOGICA PARA SABER O ÚLTIMO ELEMENTO DO ARRAY
echo $ages[count($ages) - 1];
echo '<br>';
//FUNÇÃO PARA SABER O ÚLTIMO ELEMENTO DO ARRAY
echo end($ages);

//FILTRANDO O ARRAY E MOSTRANDO APESNAS OS MAIORES DE 18
$agesFiltered = array_filter($ages, function ($age){
    return $age >=18;
});

echo '<pre>';
sort($agesFiltered);
var_dump($agesFiltered);

$names = ['Jefferson', 'dos', 'Santos', 'Silva'];

//APLICA MAIUSCULO EM TODOS OS ITENS DO ARRAY
$names = array_map(function ($name){
    return strtoupper ($name);
}, $names);
var_dump($names);
echo '<hr>';

//FUNÇÃO PARA APLICAR MAIUSCULO EM TODOS OS ITENS DO ARRAY
function aplicarMaiusc($value){
    return strtoupper ($value);
};

$names = array_map('aplicarMaiusc', $names);
var_dump($names);
echo '<hr>';