<?php

$infoPessoa = [
    'nome' => 'Jefferson',
    'sobreNome' => 'Silva',
    'dataNasc' => 25111992,
    'yearCurent' => 2021
];

$infoPessoa2 = [
    'nome2' => 'Emerson',
    'sobreNome' => 'Silva',
    'dataNasc2' => 11091995,
    'yearCurent2' => 2021,
    'formacao' => 'BSI',
    'idade' => 25,
];



//RETORNA AS CHAVES DENTRO DO ARRAY
var_dump(array_keys($infoPessoa));

echo'</br>';

//RETORNA OS VALORES DENTRO DO ARRAY
var_dump(array_values($infoPessoa));

echo'</br>';

//RETORNA QUANIDADE DE ITENS DENTRO DO ARRAY
var_dump(count($infoPessoa));

echo'</br>';

$juncaoArrays = array_merge($infoPessoa, $infoPessoa2);

echo '<pre>';
var_dump($juncaoArrays);