<?php

session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.html");
    exit();
} 
$artigo_id = $_GET['artigo_id']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
<?php
    include ('./php/connect.php');
    $sql ="SELECT * FROM tb_artigo WHERE id=$artigo_id";
    $resultado = $conn->query("$sql");
    while($resultset = $resultado->fetch_array())
    {
      ?>
        <h1><?php echo $resultset["title"]?></h1>
        <img src=<?php echo $resultset["img_url"]?> width="200px">
        <p><?php echo $resultset["text"]?></p>
      <?php
         }
      ?>
    </div>

    <h2>Comentarios</h2>
    <div style="border: solid black 2px; padding: 10px">
        <form action="./php/post_comentario.php" method="POST">
            <p>Postar comentário</p>
            <label name="text">Texto</label><br />
            <textarea id="text" name="text" ></textarea>
            <input style="display: none;" type="text" id="artigo_id" name="artigo_id" value=<?php echo $artigo_id?>> <br>
            <input placeholder="Postar" id="button1" type="submit"/><br />
        </form>
    </div>
         <br>
    <div>
    <?php
        include ('./php/connect.php');
        $sql ="SELECT * FROM tb_comment WHERE artigo_id=$artigo_id";
        $resultado = $conn->query("$sql");
        while($resultset = $resultado->fetch_array())
        {
        ?>
        <div style="border: solid black 2px; padding: 10px">
            <p>Usuário: <?php echo $resultset["user_name"]?></p>
            <p><?php echo $resultset["text"]?></p>
        </div>
        <?php
            }
        ?>
    </div>
</body>
</html>