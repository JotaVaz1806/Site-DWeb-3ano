<?php

include "connect.php";

$title = $_POST['title'];
$img_url = $_POST['img_url'];
$text = $_POST['text'];

echo $text;

$sql = "INSERT INTO tb_artigo (title, img_url, text) VALUES ('$title', '$img_url', '$text')";

if ($conn->query($sql) === TRUE) {
    echo "Artigo cadastrado com sucesso";
    header("Location: ../index.php");
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fechando a conexão
$conn->close();
?>