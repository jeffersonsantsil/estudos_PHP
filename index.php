<?php


require './vendor/autoload.php';

use JeffersonSilva\EstudosPhp\PessoaFisica;
use JeffersonSilva\EstudosPhp\PessoaJuridica;

$jefferson = new PessoaFisica(
    "Jefferson Silva",
    "jeffersonsantsil@gmail.com",
    "81993263429",
    "09278200484",
    "25111992",
    "M"
);



$emerson = new PessoaJuridica(
    "Emerson Silva",
    "emerson.silva@email.com",
    "81999342518",
    "15432548578945",
    "11092023",
    true
);


$jhennifer = new PessoaFisica(
    'Jhennifer Varela',
    'jhennyfer.varela@bracellpapeis.com.br',
    '81992235478',
    '12578459623',
    "01042003",
    "F"
);

dump($jefferson);

dump($emerson);

dump($jhennifer);

echo $emerson->apresentacao();

$emerson->name = ("Emerson Silva - LTDA");

echo $emerson->apresentacao();
