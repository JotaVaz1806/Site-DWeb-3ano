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

        .perfil {
            margin: 20px;
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
    <div class="perfil">
        <h1>Perfil</h1>
        <p>Id: <?php echo $_SESSION['id']?> </p>
        <p>Nome: <?php echo $_SESSION['nome']?> </p>
        <p>Email: <?php echo $_SESSION['email']?></p>
    </div>
</body>
</html>