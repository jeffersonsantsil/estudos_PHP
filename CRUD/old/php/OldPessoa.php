<?php
require_once "Conexao.php";
$conn = new Conexao("mysql", "testesphp", "localhost", "root", "");

class OldPessoa
{
    public function usersList(Conexao $conn)
    {
        $listarPessoas = $conn->conectar()->prepare("SELECT * FROM users");
        $listarPessoas->execute();
        $listaDePessoas = $listarPessoas->fetchAll(PDO::FETCH_ASSOC);
        return $listaDePessoas;
        //var_dump($listaDePessoas);
    }



    // public function cadastrar(string $nome, string $email, string $userName, string $password)
    // {
    //     $senha = $this->codificarSenha($password);
    //     $insert = $this->pdo->prepare("INSERT INTO pessoa(nome, cpf, email, senha) VALUES (:nome, :cpf, :email, :senha)");
    //     $insert->bindValue(":nome", "$nome");
    //     $insert->bindValue(":email", "$email");
    //     $insert->bindValue(":senha", "$senha");
    //     $insert->execute();
    // }

    // public function buscar(int $id)
    // {
    //     $buscaPessoa = $this->pdo->prepare("SELECT * FROM pessoa WHERE id = $id");
    //     $buscaPessoa->execute();
    //     $pessoa = $buscaPessoa->fetch(PDO::FETCH_ASSOC);
    //     return $pessoa;
    //     //var_dump($pessoa);


    // }

    // public function editar(int $id, $campo, $value)
    // {
    //     if ($campo == "cpf") {
    //         echo "Este campo não pode ser alterado, contatar o administrador do sistema";
    //         exit();
    //     }
    //     if ($campo == "senha") {
    //         $value = $this->codificarSenha($value);

    //     } else {
    //         $update = $this->pdo->prepare("UPDATE pessoa SET $campo = :atualizar WHERE id = $id");

    //         $update->bindParam($campo, $value);
    //         $update->execute();
    //     }
    // }



    private function codificarSenha(string $value): string
    {
        return hash('sha256', $value);
    }
}
