<?php

require_once 'Conta.php';
require_once 'Titular.php';

$contaJeff = new Conta( new Titular("123.456.789-01", "Jefferson Silva"));
$contaNanda = new Conta(new Titular("123.456.789-02", "Fernanda Silva"));
$contaTeste = new Conta(new Titular("123.456.789-03", "Bianca"));


echo "<pre>";

echo $contaJeff->mostrarNomeTitular();


