<?php

session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.html");
    exit();
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Comentarios</h2>
    <form action="./php/post_comentario.php" method="POST">
        <p>Postagem de comentário</p>
        <label name="text">Texto</label><br />
        <textarea id="text" name="text" ></textarea><br />
        <input placeholder="Postar" id="button1" type="submit"/><br />
    </form>
</body>
</html>