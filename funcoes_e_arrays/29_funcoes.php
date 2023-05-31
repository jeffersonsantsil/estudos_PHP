<?php

$name = 'Jefferson Silva';


//VERIFICA SE A VARIAVEL EXISTE
if (isset($name))
{
    echo $name;
}else
    echo 'Não existe';
    echo '<hr>';


    //DELETA A VARIAVEL
unset($name);

if (isset($name))
{
    echo $name;
}else
    echo 'Não existe';

    echo '<hr>';
    echo $name;