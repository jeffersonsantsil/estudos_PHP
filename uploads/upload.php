<?php


var_dump($_FILES);

$fotos = $_FILES['fotos'];
$path = 'uploads/imgs/';

//CASO O DIRETORIO ONDE VAI SER COLOCADA AS FOTOS NÃO EXISTIR ELE SERÁ CRIADO
if (!is_dir($path)){
    mkdir('uploads');
    mkdir($path);
}

//IRÁ MOSTRAR SE OBTEVE SUCESSO EM FAZER O UPLOAD DOS ARQUIVOS OU NÃO
for ($i=0; $i < count($fotos['name']); $i++){
    $j = $i + 1;
    if (move_uploaded_file($fotos['tmp_name'][$i], $path . $fotos['name'][$i]))
        echo "Sucesso ao mover arquivo {$fotos['name'][$i]} <br>";
    else
        echo "Falha ao mover arquivo {$fotos['name'][$i]} <br>";
}