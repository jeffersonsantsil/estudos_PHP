<?php

$teste = 'Hoje é um lindo dia!';

generationLog($teste);


//FUNÇÃO PARA GERAR O ARQUIVO DE LOG CASO AINDA NÃO TENHA E ACRESCENTAR O VALOR DA VARIAVEL $teste NO FIM DO ARQUIVO LOG
function generationLog($value)
{
    $criarArquivoLog = fopen('explore.log', 'a+');
    fwrite($criarArquivoLog, "{$value} \r\n");
    fclose($criarArquivoLog);
}