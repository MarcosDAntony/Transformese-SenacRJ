<?php
// Conectar ao banco de dados (substitua as credenciais pelos seus próprios)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "deluxuniformespro-bd";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Recuperar dados do formulário
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = password_hash($_POST["senha"], PASSWORD_DEFAULT); // Hash da senha

// Inserir dados no banco de dados
$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

// Fechar a conexão
$conn->close();
?>
