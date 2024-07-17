<?php


public function conectar($user, $password)
{
    $dBName = "apijson";
    try {
        $conn = new PDO("mysql:host=localhost;dbname=$dBName", $user, $password);
    } catch (PDOException $erroMsg) {
        echo $erroMsg;
    }
}

function findUser()
{
    $this->conn;
}
