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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./style/sobre.css" />
    <link rel="stylesheet" href="./style/nav.css" />
    <link rel="stylesheet" href="./style/geral.css" />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
      }
    </style>
  </head>
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
    <div class="row1">
      <div class="colum1">
        <h1>Sobre</h1>
        <p id="text1">
          Esse projeto foi realizado pelos alunos: Júlio Vaz, Caio Henrique,
          Leandro Macedo, Daniel Santana, Cleiton Rodrigues e Manoel Sales, como requisito
          curricular da Matéria de Linguagem de Progamação II.
        </p>
      </div>
      <div class="colum2">
        <p>
          <img src="images.png" />
        </p>
      </div>
    </div>
  </body>
</html>
