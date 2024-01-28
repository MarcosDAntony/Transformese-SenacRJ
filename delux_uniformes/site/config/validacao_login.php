<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include './connect.php';

    // Obtenha os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta SQL para verificar as credenciais
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Se as credenciais estiverem corretas, redirecione para a página desejada
        $_SESSION['email'] = $row['email'];
        $_SESSION['tipo_cadastro'] = $row['tipo_cadastro'];

    var_dump($row);
        if ($row ["tipo_cadastro"] == "Administrador"){
           header("Location: http://localhost/projeto-integrador-transformese/delux_uniformes/site_adm/area-adm.php");
        } else{
            header("Location: http://localhost/projeto-integrador-transformese/delux_uniformes/site_user/principal-user.php");
        }

        exit;
    }
    else {
        header("Location: ./erro.html");
    }

    // Feche a conexão com o banco de dados
    $conn->close();
}
?>