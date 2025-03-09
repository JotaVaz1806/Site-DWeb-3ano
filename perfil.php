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
    <title>Document</title>
</head>
<body>
    <h1>Perfil</h1>
    <p>Id: <?php echo $_SESSION['id']?> </p>
    <p>Nome: <?php echo $_SESSION['nome']?> </p>
    <p>Email: <?php echo $_SESSION['email']?></p>
</body>
</html>