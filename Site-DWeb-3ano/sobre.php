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
    <link rel="stylesheet" href="styleSobre.css" />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
      }

      /* Estilização da barra de navegação */
      nav {
        background-color: #333;
        display: flex;
        justify-content: space-around;
        align-items: center;
        height: 60px;
      }

      /* Estilização dos links */
      nav ul {
        list-style: none;
        display: flex;
      }

      nav ul li {
        margin: 0 15px;
      }

      nav ul li a {
        text-decoration: none;
        color: white;
        font-size: 18px;
        padding: 8px 12px;
        transition: 0.3s;
      }

      /* Efeito hover nos links */
      nav ul li a:hover {
        background-color: #555;
        border-radius: 5px;
      }

      /* Responsividade para telas menores */
      @media (max-width: 600px) {
        nav {
          flex-direction: column;
          height: auto;
          padding: 10px 0;
        }

        nav ul {
          flex-direction: column;
          align-items: center;
        }

        nav ul li {
          margin: 10px 0;
        }
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
        <li><a href="">Jogos</a></li>
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
