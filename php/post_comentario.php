<?php

include "connect.php";

$text = $_POST['text'];
$user_id = $_SESSION['id'];
$id_artigo = $_POST['artigo_id']

$sql = "INSERT INTO tb_comentario (user_id, text) VALUES ('$user_id', '$text')";

if ($conn->query($sql) === TRUE) {
    echo "Comentário postado com sucesso";
    header("Location: ../index.php");
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fechando a conexão
$conn->close();
?>