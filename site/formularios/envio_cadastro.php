<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "deluxuniformespro-bd";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obter dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$uf = $_POST['uf'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$tipo_cadastro = $_POST['tipo_cadastro'];
// Parece ser daqui mas não é  apesar de ser mesma tabela $carrinho = $_POST['carrinho'];

// Inserir dados no banco de dados
$sql = "INSERT INTO usuarios (nome, email, senha, uf, endereco, cep, tipo_cadastro) VALUES ('$nome', '$email', '$senha', '$uf', '$endereco', '$cep', '$tipo_cadastro')";

if ($conn->query($sql) === TRUE) {
    header("Location: login.php");
} 
else{
    header("Location: cadastro.php"). $conn->error;
}

// Fechar a conexão
$conn->close();
?>
