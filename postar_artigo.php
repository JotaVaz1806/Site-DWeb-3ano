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
    <link rel="stylesheet" href="./style/nav.css" />
  </head>
  <body>
  <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="postar_artigo.php">Postar artigo</a></li>
            <li><a href="perfil.php">Perfil</a></li>
            <li></li>
            <li></li>
            <li></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="./php/logout.php">Logout</a></li>
        </ul>
</nav>
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
