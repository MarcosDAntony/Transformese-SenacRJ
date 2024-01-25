<?php


require_once("../banco-de-dados/config.php");

// Restante do código permanece o mesmo...

session_start();

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
$email = $_POST["email"];
$senha = $_POST["senha"];

// Verificar se o usuário existe
$sql = "SELECT * FROM usuarios WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Verificar a senha
    if (password_verify($senha, $row["senha"])) {
        $_SESSION["id-usuario"] = $row["id"];
        header("Location: area_usuario.php");
    } else {
        echo "Senha incorreta.";
    }
} else {
    echo "Usuário não encontrado.";
}

// Fechar a conexão
$conn->close();
?>
