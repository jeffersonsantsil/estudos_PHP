<?php


if($_REQUEST['nome'] == '' || strlen($_REQUEST['nome']) <= 3){
    echo 'O campo nome inválido!';

    return;
}elseif($_REQUEST['password'] == '' || strlen($_REQUEST['password']) <=8)
{
    echo 'O campo Senha inválido!';

    return;
    }

echo "Nome: {$_REQUEST['nome']}";
echo '<hr>';
echo "Senha: {$_REQUEST['password']}";
echo '<hr>';
echo "E-mail: {$_REQUEST['email']}";
echo '<hr>';
echo "Concordou? ".isset($_REQUEST['concordo']) && $_REQUEST['concordo'] != '' ? 'Sim':'Não';
echo '<hr>';
echo "Sexo: {$_REQUEST['sexo']}";
echo '<hr>';
echo "Estado: {$_REQUEST['estado']}";
echo '<hr>';
echo "Descrição: {$_REQUEST['descricao']}";


/*
*POST
echo "Nome: {$_POST['nome']}";
echo '<hr>';
echo "Senha: {$_POST['password']}";
echo '<hr>';
echo "E-mail: {$_POST['email']}";
echo '<hr>';
echo "Concordou? ".isset($_POST['concordo']) && $_POST['concordo'] != '' ? 'Sim':'Não';
echo '<hr>';
echo "Sexo: {$_POST['sexo']}";
echo '<hr>';
echo "Estado: {$_POST['estado']}";
echo '<hr>';
echo "Descrição: {$_POST['descricao']}";
*/