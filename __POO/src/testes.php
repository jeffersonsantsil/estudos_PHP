<?php

require_once 'Conta.php';
require_once 'Titular.php';
require_once 'Cpf.php';


$jefferson = new Titular(new Cpf ("123.456.789-10"), "Jefferson Silva");



echo "<pre>";


echo $jefferson->mostrarNomeTitular();

