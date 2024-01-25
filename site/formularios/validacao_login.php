<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Defina suas credenciais do banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "deluxuniformespro-bd";

    // Conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifique se a conexão foi bem sucedida
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Obtenha os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta SQL para verificar as credenciais
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Se as credenciais estiverem corretas, redirecione para a página desejada
        $_SESSION['email'] = true;
        $_SESSION['senha'] = true;
        header("Location: area-usuario.php");
        exit;
    } else {
        echo "Usuário ou senha incorretos.";
    }

    // Feche a conexão com o banco de dados
    $conn->close();
}
?>