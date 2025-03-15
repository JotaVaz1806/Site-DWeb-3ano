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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/nav.css" />
    <link rel="stylesheet" href="./style/geral.css" />
    <title>Document</title>
</head>
<style>
        .perfil {
            margin: 20px;
        }
    </style>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="cadastra.html">Cadastro</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <form class="perfil" method="post" action="./php/update_perfil.php">
        <h1>Editando Perfil</h1>
        <label for="name">Nome</label><br>
        <input id="name" name="name" style="width: 300px;" value= <?php echo $_SESSION['nome'] ?>><br>
        <label for="email">Nome</label><br>
        <input id="email" name="email" style="width: 300px;" value= <?php echo $_SESSION['email']?>><br>
        <input type="submit">
    </form>
    <a href="./editar_perfil.php">Salvar</a>
</body>
</html>