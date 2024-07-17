<?php
$dBName = "apijson";
$user = "root";
$password = "";



try {
    $conn = new PDO("mysql:host=localhost;dbname=$dBName", $user, $password);
} catch (PDOException $erroMsg) {
    echo $erroMsg;
}



// ---------- INSERIR  ----------//

// $insert = $conn->prepare("INSERT INTO users (nome, email, telefone) VALUES (:nome, :email, :telefone)");
// $insert->bindValue(':nome', "Jefferson");
// $insert->bindValue(':email', "jeffersonsantsil@gmail.com");
// $insert->bindValue(':telefone', 81993263429);
// $insert->execute();

// if ($insert) {
//     echo "Cadastrado com sucesso!";
// } else {
//     echo $erroMsg;
// }


// ---------- DELETE  ----------//

// $deleteId = 7;

// $delete = $conn->prepare("DELETE FROM users WHERE id = :deleteId");
// $delete->bindValue(':deleteId',$deleteId);
// $delete->execute();

// if ($delete) {
//     echo "Removido com sucesso!";
// } else {
//     echo "Algo deu errado ->" . $erroMsg;
// }

// ---------- UPDATE  ----------//

// $update = $conn->prepare("UPDATE users SET email = :email WHERE id = :id");
// $userId = 8;
// $newEmail = "jeffersonsantsil@outlook.com";
// $update->bindValue(":email",$newEmail);
// $update->bindValue(":id",$userId);
// $update->execute();

// ---------- SELECT  ----------//

$find = $conn->prepare("SELECT * FROM users WHERE id = :id");
$find->bindValue('id', 5);
$find->execute();
$users = $find->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $key => $user) {
    echo $key . " : " . $user . PHP_EOL;
}

