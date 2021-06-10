<?php

$arquivoLog = fopen('explore.log', 'a+');

//ESSA FUNÇÃO PERCORRE TODO O ARQUIVO
//feof($arquivoLog);

while (!feof($arquivoLog)) {
    //SÓ LÊ A PRIMEIRA LINHA DO ARQUIVO
    echo fgets($arquivoLog, 4096) . '<br>';
}

fclose($arquivoLog);