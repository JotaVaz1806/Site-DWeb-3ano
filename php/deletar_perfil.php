<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: ../login.html");
    exit();
} 

include 'connect.php';

$id=$_SESSION['id'];    

$sql = "DELETE FROM tb_user WHERE tb_user.id = $id";
 

if (mysqli_query($conn, $sql)) {
  echo "Usuário excluido com sucesso<br>";
              
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

session_destroy();
header("Location: ../login.html");
?>