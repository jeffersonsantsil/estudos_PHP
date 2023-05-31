<?php

$domain = 'www.nacaoti.com.br';
$name = ' Jefferson dos Santos Silva ';

//FUNÇÕES DE SUBSTITUIÇÃO
echo str_replace('www.', '', $domain);
echo '<br>';
echo str_replace('www.', 'https://www.', $domain);
echo '<br>';
echo str_replace(' ', '', $name);
echo '<br>';
echo substr($domain, 0, 8);
echo '<hr>';

$protocolPadrao = 'https://';
$protocol = substr($domain, 0, 8);
$secureProtocol = str_replace('www.', 'https://www.', $domain);
echo $secureProtocol;
echo '<hr>';

if ($protocol == $protocolPadrao)
{
    echo 'É seguro trabalhar com esse protocolo';
}else
    echo 'Esse tipo de protocolo não é seguro! <br>Sugiro fazer a alteração.';