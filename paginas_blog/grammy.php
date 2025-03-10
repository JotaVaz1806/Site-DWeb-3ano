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
        <h1 style="text-align: center; margin: 30px; font-size:40px;">O Grammy</h1>

        <img src="../grammy.png" width="400px" style="margin: 20px;">

        <p>
        O Grammy Awards é uma cerimônia de premiação anual que reconhece os melhores artistas da indústria musical. É considerado o principal prêmio musical do mundo. 
História 
A primeira cerimônia do Grammy foi realizada em 1959
A cerimônia foi originalmente chamada de “Gramophone Awards”
A Academia de Gravação reformulou muitas categorias do Grammy Award para 2012
Quem pode participar 
Membros da Recording Academy, gravadoras e músicos podem inscrever os trabalhos
As gravações precisam ser originais, lançadas dentro do período de elegibilidade e atender a critérios específicos de gênero
Quem ganha 
Beyoncé é a recordista da premiação, com 32 gramofones conquistados
Grammy Latino 
O Grammy Latino homenageia obras gravadas em espanhol, português ou em idiomas reconhecidos na Ibero-América
Os processos de nomeação e votação do Grammy Latino são semelhantes aos do Grammy regular </p>
        <br>
        <p>Visualizando como: <?php echo $_SESSION['nome']?> </p>
    </div>
</body>
</html>