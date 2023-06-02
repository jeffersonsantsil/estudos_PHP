<?php

class Pessoa
{
    private $pdo;


    public function conecta(string $dbname, string $host, string $userName, $password)
    {
        try {
            $this->pdo = new PDO(
                "mysql:dbname=" . $dbname . ";
                host=" . $host,
                $userName,
                $password
            );
            echo "Conectado!";
        } catch (PDOException $erro) {
            echo "Erro de banco: " . $erro->getMessage();
            exit();
        }
    }


    public function cadastrar(string $nome, int $cpf, string $email, string $senha)
    {
        $senha = $this->codificarSenha($senha);
        $insert = $this->pdo->prepare("INSERT INTO pessoa(nome, cpf, email, senha) VALUES (:nome, :cpf, :email, :senha)");
        $insert->bindValue(":nome", "$nome");
        $insert->bindValue(":cpf", "$cpf");
        $insert->bindValue(":email", "$email");
        $insert->bindValue(":senha", "$senha");
        $insert->execute();
    }

    public function buscar(int $id)
    {
        $buscaPessoa = $this->pdo->prepare("SELECT * FROM pessoa WHERE id = $id");
        $buscaPessoa->execute();
        $pessoa = $buscaPessoa->fetch(PDO::FETCH_ASSOC);
        return $pessoa;
        //var_dump($pessoa);


    }

    public function listar()
    {
        $listarPessoas = $this->pdo->prepare("SELECT * FROM pessoa");
        $listarPessoas->execute();
        $listaDePessoas = $listarPessoas->fetchAll(PDO::FETCH_ASSOC);
        return $listaDePessoas;
        //var_dump($listaDePessoas);
    }

    public function editar(int $id, $campo, $value)
    {
        if ($campo == "cpf") {
            echo "Este campo não pode ser alterado, contatar o administrador do sistema";
            exit();
        }
        if ($campo == "senha") {
            $value = $this->codificarSenha($value);  
                      
        } else {
            $update = $this->pdo->prepare("UPDATE pessoa SET $campo = :atualizar WHERE id = $id");
            
            $update->bindParam($campo, $value);
            $update->execute();
        }
    }



    private function codificarSenha(string $senha): string
    {
        return hash('sha256', $senha);
    }
}
