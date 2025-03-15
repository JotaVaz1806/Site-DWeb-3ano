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
    <title>Document</title>
    <link rel="stylesheet" href="./style/nav.css" />
    <link rel="stylesheet" href="./style/geral.css" />
    <style>
      .blog {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
        flex-flow: wrap;
      }

      .card {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
        margin: 10px;
        padding: 20px;
        border: 1px solid black;
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
    <h1 style="text-align: center; margin: 30px; font-size:40px;">ThinkFlow</h1>

    <div class="blog">
      <?php
          include ('./php/connect.php');
          $sql ="SELECT * FROM tb_artigo";
          $resultado = $conn->query("$sql");
          while($resultset = $resultado->fetch_array())
          {
      ?>
        <div class='card'>
          <a href=<?php echo './artigo.php?artigo_id='.$resultset["id"]?>>
            <img src=<?php echo $resultset["img_url"]?> width="200px">
            <p><?php echo $resultset["title"]?></p>
          </a>
        </div>
      <?php
         }
      ?>
    </div>
  </body>
</html>
