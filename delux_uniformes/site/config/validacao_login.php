<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include './connect.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $_SESSION['email'] = $row['email'];
        $_SESSION['telefone'] = $row['telefone'];
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


    $conn->close();
}
?>