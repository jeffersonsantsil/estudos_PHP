<?php

//var_dump($_FILES['foto']['type']);

$photo = $_FILES['foto'];
$path = 'uploads/imgs/';

if(move_uploaded_file($photo['tmp_name'], $path . $photo['name']))
    echo 'Sucesso!';
else
    echo 'Falha!';