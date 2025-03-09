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
    <h1>Assunto interessante</h1>
    <p>textotextotextotextotextotextotextotextotextotexto
    textotextotextotextotextotextotextotextotextotextotexto
    textotextotextotextotextotextotextotextotextotextotexto
    textotextotextotextotextotextotextotextotextotextotexto
    textotextotextotextotextotextotextotextotextotextotexto
    textotextotextotextotextotextotextotextotextotexto
    </p>
    <p>Visualizando como: <?php echo $_SESSION['nome']?> </p>
</body>
</html>