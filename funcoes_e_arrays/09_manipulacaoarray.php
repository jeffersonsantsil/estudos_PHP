<?php

$cart = ['Arroz', 'Sabão', 'Feijão', 'Balinha'];

var_dump($cart);

echo '</br>';
echo '<hr>';

//REMOVE O ÚLTIMO ITEM DO ARRAY
array_pop($cart);
echo '</br>';
var_dump($cart);
echo '</br>';
echo '<hr>';

//REMOVE O PRIMEIRO ITEM DO ARRAY
array_shift($cart);
echo '</br>';
var_dump($cart);
echo '</br>';
echo '<hr>';

//REMOVE TANTO O ARRAY COMPLETO QUANTO UMA DETERMINADA CHAVE
unset($cart[0]);
echo '</br>';
var_dump($cart);
echo '</br>';
echo '<hr>';

//ACRESCENTA UM ITEM NO FINAL DO ARRAY
array_push($cart, 'Tapete');
array_push($cart, 'Rode');
var_dump($cart);
echo '<hr>';

//ACRESCENTA UM ITEM NO INICIO DO ARRAY
array_unshift($cart, 'Microondas');
var_dump($cart);
echo '<hr>';


array_unshift($cart, 'Tapete');
var_dump($cart);
echo '<hr>';


//REMOVE ITENS DUPLICADOS DENTRO DO ARRAY
$cart = array_unique($cart);
var_dump($cart);
echo '<hr>';