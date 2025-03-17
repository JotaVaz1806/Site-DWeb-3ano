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
        <h1 style="text-align: center; margin: 30px; font-size:40px;">Como o deepseek foi criado</h1>

        <img src="../deepseek.png" width="400px" style="margin: 20px;">

        <p>
        O DeepSeek foi desenvolvido com base em modelos de IA generativa, combinando aprendizado por reforço e engenharia de recompensa. Essa abordagem permite que o algoritmo aprenda interagindo com um ambiente, através de tentativa e erro, recebendo feedback sobre suas saídas.
        A DeepSeek foi fundada por Wenfeng Guo, com o objetivo de criar uma IA que pudesse resolver problemas complexos e auxiliar em diversas áreas, como produção de conteúdo e suporte ao cliente. A empresa conta com uma equipe de jovens talentos, muitos deles recém-formados em universidades de elite chinesas, como Tsinghua e Peking.
        Uma das principais características do DeepSeek é a sua eficiência no armazenamento de informações na memória do computador. O modelo V3 utiliza uma técnica de compactação de dados que facilita o armazenamento e o acesso rápido às informações relevantes.
        A DeepSeek está disponível para diferentes públicos, desde usuários individuais até empresas e desenvolvedores que desejam integrar a tecnologia em seus serviços. Algumas versões podem ter acesso gratuito, enquanto outras mais avançadas podem estar disponíveis sob planos pagos, dependendo dos recursos oferecidos.
        </p>
        <br>
        <p>Visualizando como: <?php echo $_SESSION['nome']?> </p>
    </div>
</body>
</html>