<?php

use Estudos\PooPhp\Pessoa;

require  '..\vendor\autoload.php';
//Use Pessoa;


$jefferson = new Pessoa(
    "Jefferson Silva",
    "jeffersonsantsil@gmail.com",
    "81993263429",
    "09278200484",
    25111992
);

$emerson = new Pessoa(
    "Emerson Silva",
    "emerson.silva@email.com",
    "81999342518",
    "15432578945",
    "11091995"
);

dump($jefferson);

echo $jefferson->apresentacao() . PHP_EOL;


dump($emerson);
echo $emerson->apresentacao();

$jhennifer = new Pessoa(
    'Jhennifer Varela',
    'jhennyfer.varela@bracellpapeis.com.br',
    '81992235478',
    '12578459623',
    "01042003"
);

dump($jhennifer);
echo $jhennifer->apresentacao();
