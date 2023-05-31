<?php


$name = 'Nação TI - Cursos especializados em Tecnologia';

echo '<hr>';
//TODOS MAIUSCULOS
echo strtoupper($name);

echo '<br>';
echo '<hr>';

//TODOS MINUSCULOS
echo strtolower($name);

echo '<br>';
echo '<hr>';

//PRIMEIRA LETRA DA FRASE MAIUSCULA
echo ucfirst($name);

//TRANSFORMA TODAS EM MINUSCULAS E DEPOIS COLOCA PRIMEIRA LETRA DA FRASE MAIUSCULA
echo ucfirst(strtolower($name));

echo '<br>';
echo '<hr>';

//TRANSFORMA PRIMEIRA LETRA DE CADA PALAVRA DA FRASE EM MAIUSCULA
echo ucwords(strtolower($name));
echo '<hr>';