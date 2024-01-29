<?php


$email = filter_input(INPUT_POST,"email", FILTER_SANITIZE_EMAIL);
$nova_senha = filter_input(INPUT_POST,"nova_senha");

$connection = new mysqli("localhost","root","","delux_uniformes");

if (!empty($email) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($connection, $email);

    $query = "UPDATE usuarios SET senha = '$nova_senha' where email = '$email'";

    if(mysqli_query($connection, $query)){
        echo "Senha alterada com sucesso. Você será redirecionado em 3 segundos...";
        header("Refresh: 3; URL=../login.php");
    }

}


?>