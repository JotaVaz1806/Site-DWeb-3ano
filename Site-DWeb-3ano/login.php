<?php
session_start();
include "connect.php";

// Pegando os dados do formulário
$nome = $_POST['nome'];
$senha = $_POST['password'];

// Preparando a consulta SQL
$sql = "SELECT id, name, email, password FROM tb_user WHERE name='$nome' AND password='$senha'";
//INSERT INTO `livro` ( `nome_livro`, `autor`, `genero`, `Editora`) VALUES ( 'a Lua e o sol', 'xuxa', 'humor', 'Brasil');  
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    echo "AQUII";
    $row = mysqli_fetch_assoc($result);
    //senha que retorna do banco
    $senha2=$row['password'];
    echo $senha;
    echo $senha2;
    
    if ($senha == $senha2) {
        $_SESSION['id'] = $row['id'];
        $_SESSION['nome'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        header("Location: index.php");
        exit();
    } else {
        echo "Senha incorreta!";
    }
} else {
    echo "Usuário não encontrado!";
}
// Fechando a conexão
$conn->close();
?>
