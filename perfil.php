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
            <li><a href="postar_artigo.php">Postar artigo</a></li>
            <li><a href="perfil.php">Perfil</a></li>
            <li></li>
            <li></li>
            <li></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="./php/logout.php">Logout</a></li>
        </ul>
    </nav>
    <div class="perfil">
        <h1>Perfil</h1>
        <p>Id: <?php echo $_SESSION['id']?> </p>
        <p>Nome: <?php echo $_SESSION['nome']?> </p>
        <p>Email: <?php echo $_SESSION['email']?></p>
    </div>
    <a href="./editar_perfil.php">Editar Perfil</a> <br><br><br><br>
    <a href="./php/deletar_perfil.php">Deletar Perfil</a>
</body>
</html>