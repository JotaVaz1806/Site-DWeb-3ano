<?php

include "connect.php";
session_start();

$text = $_POST['text'];
$user_id = $_SESSION['id'];
$id_artigo = 1;

$sql = "INSERT INTO tb_comment (user_id, text, artigo_id) VALUES ('$user_id', '$text', '$id_artigo')";

if ($conn->query($sql) === TRUE) {
    echo "Comentário postado com sucesso";
    header("Location: ../index.php");
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fechando a conexão
$conn->close();
?>