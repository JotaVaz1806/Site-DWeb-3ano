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
    <div class="perfil">
        <h1>Perfil</h1>
        <p>Id: <?php echo $_SESSION['id']?> </p>
        <p>Nome: <?php echo $_SESSION['nome']?> </p>
        <p>Email: <?php echo $_SESSION['email']?></p>
    </div>
    <a href="./editar_perfil.php">Editar Perfil</a>
</body>
</html>