<?php
session_start();

include './connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];

    // Atualiza os dados do usuário no banco de dados
    $email = $_SESSION['email'];
    $sql = "UPDATE usuarios SET nome='$nome', senha='$senha', telefone='$telefone', cep='$cep', rua='$rua', numero='$numero', bairro='$bairro', cidade='$cidade', uf='$uf' WHERE email='$email'";
    
    if ($conn->query($sql) === TRUE) {
        // Exibe mensagem e redireciona após 3 segundos
        echo "Dados alterados com sucesso. Você será redirecionado em 3 segundos.";
        header("Refresh: 3; URL=../area-usuario.php");
        exit();
    } else {
        // Trate o erro de atualização
        echo "Erro ao atualizar os dados: " . $conn->error;
        exit();
    }
}

$conn->close();
?>
