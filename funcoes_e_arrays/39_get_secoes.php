<?php
//include '38_set_secoes.php';
session_start();

if (!isset($_SESSION['auth'])){
    header('Location:38_set_secoes.php');
}
else
echo 'Painel Administrativo';



//echo $_SESSION['name'];