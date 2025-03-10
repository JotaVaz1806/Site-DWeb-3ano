<?php
include "connect.php";

// Pegando os dados do formulário
$nome = $_POST['nome'];
$senha = $_POST['password'];
$email = $_POST['email'];

// Preparando a consulta SQL
$sql = "INSERT INTO tb_user (name, email, password) VALUES ('$nome', '$email', '$senha')";
        //INSERT INTO `livro` ( `nome_livro`, `autor`, `genero`, `Editora`) VALUES ( 'a Lua e o sol', 'xuxa', 'humor', 'Brasil');  

if ($conn->query($sql) === TRUE) {
    echo "Usuário cadastrado com sucesso cadastrado com sucesso!";
    header("Location: login.html");
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fechando a conexão
$conn->close();
?>
