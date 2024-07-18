<?php

require_once 'Pessoa.php';

$pessoa = new Pessoa();
$conectaBanco = $pessoa->conecta("estudos", "localhost","root","");




echo "<pre>";
$pessoa->editar("7", "email","Eternos@hotmail.com");
echo "</pre>";
