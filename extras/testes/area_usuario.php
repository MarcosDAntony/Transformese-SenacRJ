<?php
require_once("../banco-de-dados/config.php");
session_start();

// Verificar se o usuário está autenticado
if (!isset($_SESSION["usuario_id"])) {
    header("Location: login.php");
    exit();
}

// Conectar ao banco de dados (substitua as credenciais pelos seus próprios)
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "deluxuniformespro-bd";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Recuperar dados do usuário
$usuario_id = $_SESSION["usuario_id"];
$sql = "SELECT * FROM usuarios WHERE id='$usuario_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nome = $row["nome"];
    $email = $row["email"];
} else {
    echo "Erro ao recuperar dados do usuário.";
}

// Fechar a conexão
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Usuário</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo $nome; ?>!</h2>
    <p>E-mail: <?php echo $email; ?></p>
    <a href="logout.php">Sair</a>
</body>
</html>
