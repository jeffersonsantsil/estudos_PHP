<?php

require_once 'Conta.php';

$contaJeff = new Conta("123.456.789-01", "anaad");
$contaNanda = new Conta("123.456.789-02", "Fernanda Silva");
$contaTeste = new Conta("123.456.789-03", "Bianca Silva");



echo "<pre>";

echo $contaTeste->contaContas();

