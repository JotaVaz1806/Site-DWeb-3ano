<?php

session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.html");
    exit();
};
include 'connect.php';

$name=$_POST['name'];              
$email=$_POST['email'];
$id = $_SESSION['id'];

$sql = "UPDATE tb_user SET name = '$name', email='$email' WHERE tb_user.id = '$id'";
      //UPDATE `tb_user` SET `nome_user` = 'jose m', `senha` = '1234', `email` = 'mariajose1@gmail.com', `sexo` = 'f', `data-cad` = NOW() WHERE `tb_user`.`id_user` = 2;

if (mysqli_query($conn, $sql)) {
  echo "Dados atualizados com Sucesso<br>";
  //header("Location:noticiapesquisa.php");
           
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>