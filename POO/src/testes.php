<?php

require_once 'Conta.php';
require_once 'Conexao.php';

$conta = new Conta();
$conta2 = new Conta();
$conexao = new Conexao();

$conexao->conectar();


$conta->cpfTitular = "123.456.789-01";
$conta->nome = "Jefferson Silva";
$conta->saldo = 2000;

$conta2->cpfTitular = "123.456.789-02";
$conta2->nome = "Fernanda Silva";
$conta2->saldo = 4932;

echo "<pre>";


/*
var_dump($conta);
echo "---------------------------------------------</br>";

$conta->sacar(2000);

var_dump($conta);



echo "---------------------------------------------</br>";
var_dump($conta2);

$conta->sacar(1000);
$conta->sacar(1200);
var_dump($conta);


echo "---------------------------------------------</br>";

$conta2->depositar(68);

echo "</br>";

var_dump($conta2);

echo "---------------------------------------------</br>";


var_dump($conta);
echo "</br>";
echo "---------------------------------------------</br>";

$conta2->transferir(2000, $conta);
var_dump($conta);


*/




//echo $conta->saldo;