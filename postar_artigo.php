<?php

session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.html");
    exit();
} 
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Postar Artigo</title>

    <link rel="stylesheet" href="./style/geral.css" />
  </head>
  <body>
    <form action="./php/post_artigo.php" method="POST">
        <p>Postagem de artigo</p>
        <label name="title">Título</label><br />
        <input id="title" name="title" /><br />
        <label name="img_url">URL de imagem</label><br />
        <input id="img_url" name="img_url" /><br />
        <label name="text">Texto</label><br />
        <textarea id="text" name="text" ></textarea><br />
        <input placeholder="Postar" id="button1" type="submit"/><br />
    </form>
  </body>
</html>
