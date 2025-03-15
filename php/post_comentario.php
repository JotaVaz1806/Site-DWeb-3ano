<?php

include "connect.php";
session_start();

$text = $_POST['text'];
$user_name = $_SESSION['nome'];
$artigo_id = $_POST['artigo_id'];

$sql = "INSERT INTO tb_comment (user_name, text, artigo_id) VALUES ('$user_name', '$text', '$artigo_id')";

if ($conn->query($sql) === TRUE) {
    echo "Comentário postado com sucesso";
    header("Location: ../index.php");
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fechando a conexão
$conn->close();
?>