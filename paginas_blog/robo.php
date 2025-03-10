<?php

session_start();
if (!isset($_SESSION['id'])) {
    header("Location: ../login.html");
    exit();
} 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        .pag {
            text-align: center;
            margin: 30px;
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
            <li><a href="../index.php">Home</a></li>
            <li><a href="../sobre.html">Sobre</a></li>
            <li><a href="../cadastra.html">Cadastro</a></li>
            <li><a href="../login.html">Login</a></li>
            <li><a href="../logout.php">Logout</a></li>
        </ul>
    </nav>
    <div class="pag">
        <h1 style="text-align: center; margin: 30px; font-size:40px;">Conheça o Robô Humanoide Que Imita
        Movimentos Humanos e Já Possui Articulações</h1>

        <img src="../robo.png" width="400px" style="margin: 20px;">

        <p>
        A Clone Robotics, uma startup polonesa, apresentou recentemente o Protoclone, um robô humanoide que está chamando a atenção por seus movimentos incrivelmente realistas. Equipado com músculos sintéticos e uma estrutura esquelética precisa, o Protoclone promete revolucionar a interação entre humanos e máquinas, especialmente no contexto doméstico.

O Que é o Protoclone?

O Protoclone é um robô humanoide bípede desenvolvido pela Clone Robotics. Ele foi projetado para imitar a biomecânica humana com precisão, utilizando uma combinação de músculos artificiais e uma estrutura esquelética detalhada. O robô possui 206 ossos, o mesmo número de ossos de um adulto humano, construídos a partir de polímeros. Esses ossos são conectados por mais de 1.000 fibras musculares artificiais, conhecidas como Myofibers, que permitem movimentos naturais.        </p>
        <br>
        <p>Visualizando como: <?php echo $_SESSION['nome']?> </p>
    </div>
</body>
</html>