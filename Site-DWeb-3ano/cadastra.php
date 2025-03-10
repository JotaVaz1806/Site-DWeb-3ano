<?php
include "connect.php";

// Pegando os dados do formulário
$nome = $_POST['nome'];
$senha = $_POST['password'];
$email = $_POST['email'];
$nomeJogo=$_POST['nomeJogo'];
$categoria=$_POST['categoria'];
$preco=$_POST['preco'];
$descricao=$_POST['descricao'];

// Preparando a consulta SQL
$sql = "INSERT INTO tb_user (name, email, password, nomeJogo, categoria, preco, descricao) VALUES ('$nome', '$email', '$senha', '$nomeJogo', '$categoria', '$preco', '$descricao')";
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
