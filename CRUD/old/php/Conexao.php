<?php

class Conexao
{
    private string $bancoDeDados;
    private string $dbname;
    private string $host;
    private string $userName;
    private string $password;

    public function __construct(string $bancoDeDados, string $dbname, string $host, string $userName, $password)
    {

        $this->bancoDeDados = $bancoDeDados;
        $this->dbname = $dbname;
        $this->host = $host;
        $this->userName = $userName;
        $this->password = $password;
    }

    public function conectar()
    {
        try {
            $conexao = new PDO(
                $this->bancoDeDados . ':dbname=' . $this->dbname . ';
                host=' . $this->host,
                $this->userName,
                $this->password
            );
            return $conexao;
        } catch (PDOException $erro) {
            echo "Erro de banco: " . $erro->getMessage();
        } catch (Exception $erro) {
            echo "Erro geral: {$erro->getMessage()}";
        }
    }
}
