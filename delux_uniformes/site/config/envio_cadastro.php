<?php
    include './connect.php';


// Obter dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$numero = $_POST['numero'];
$uf = $_POST['uf'];
$cep = $_POST['cep'];


$sql = "INSERT INTO usuarios (nome, email, senha, numero, uf, cep, tipo_cadastro) VALUES ('$nome', '$email', '$senha','$numero', '$uf', '$cep', 'Usuario')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../login.php");
} 
else{
    header("Location: ../cadastro.php"). $conn->error;
}

// Fechar a conexão
$conn->close();
?>
