<?php

class Conexao
{
    private string $dbname;
    private string $host;
    private string $userName;
    private string $password;

    public function __construct(string $dbname, string $host, string $userName, string $password)
    {
        $this->dbname = $dbname;
        $this->$host = $host;
        $this->userName = $userName;
        $this->password = $password;

        try {
            $conn = new PDO(
                "mysql:dbname=$this->dbname;
                host=$this->host",
                $this->userName,
                $this->password
            );
            return $conn;
        } catch (PDOException $erro) {
            echo "Erro de banco: " . $erro->getMessage();
        }
    }
}
