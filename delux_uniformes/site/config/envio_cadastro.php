<?php
    include './connect.php';


// Obter dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$numero = $_POST['numero'];
$uf = $_POST['uf'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$tipo_cadastro = $_POST['tipo_cadastro'];
// Parece ser daqui mas não é  apesar de ser mesma tabela $carrinho = $_POST['carrinho'];

// Inserir dados no banco de dados
$sql = "INSERT INTO cadastros (nome, email, senha, numero, uf, endereco, cep, tipo_cadastro) VALUES ('$nome', '$email', '$senha','$numero', '$uf', '$endereco', '$cep', '$tipo_cadastro')";

if ($conn->query($sql) === TRUE) {
    header("Location: login.php");
} 
else{
    header("Location: cadastro.php"). $conn->error;
}

// Fechar a conexão
$conn->close();
?>
