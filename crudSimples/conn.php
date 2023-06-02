<?php


// CONEXÃO COM O BANCO DE DADOS

$pdo = new PDO("mysql:dbname=estudos;hostname=localhost", "root", "");

try {
    if ($pdo) {
        echo "Conectado com sucesso.";
    }
} catch (PDOException $e) {
    echo "Erro de conexão com banco: {$e->getMessage()}";
}

//--------------------------- INSERT - INSERINDO DADOS NO BANCO ---------------------------//

// $insert = $pdo->prepare("INSERT INTO pessoa(nome, cpf, email, senha) VALUES (:nome, :cpf, :email, :senha)");


// $insert->bindValue(":nome", "Bianca Silva");
// $insert->bindValue(":cpf", "12345678912");
// $insert->bindValue(":email", "bianca@gmail.com");
// $insert->bindValue(":senha", hash('sha256', "123"));
// $insert->execute();

//--------------------------- UPDATE - ATUALIZANDO DADOS DO BANCO ---------------------------//

// $update = $pdo->prepare("UPDATE pessoa SET nome = :nome, email = :email, senha = :senha WHERE id = :id");
// $id = 1;
// $nome = "Bianca Oliveira da Silva";
// $email = "biancaoliveirasilva@gmail.com";
// $senha = "Jeff594652*";
// $update->bindValue(":id","$id");
// $update->bindValue(":nome","$nome");
// $update->bindValue(":email","$email");
// $update->bindValue(":senha",hash('sha256', "$senha"));
// $update->execute();


//--------------------------- DELETE - DELETANDO DADOS NO DADOS DO BANCO ---------------------------//

// $delete = $pdo->prepare("DELETE FROM pessoa WHERE id = :id");
// $id = 5;
// $delete->bindValue(":id","$id");
// $delete->execute();


//--------------------------- SELECT - SELECIONANDO POR ID NO DADOS DO BANCO ---------------------------//

// $selectId = $pdo->prepare("SELECT * FROM pessoa WHERE id = :id");
// $id = 3;
// $selectId->bindValue(":id","$id");
// $selectId->execute();
// $find = $selectId->fetch(PDO::FETCH_ASSOC);

// echo "<pre>";
// var_dump($find);
// echo "</pre>";

//--------------------------- SELECT - SELECIONANDO TODOS NO DADOS DO BANCO ---------------------------//

// $findAll = $pdo->prepare("SELECT * FROM pessoa");
// $findAll->execute();
// $findAllArray = $findAll->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// var_dump($findAllArray);
// echo "</pre>";