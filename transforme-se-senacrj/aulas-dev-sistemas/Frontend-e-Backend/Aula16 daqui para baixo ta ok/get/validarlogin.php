==== validarlogin.php =======================


<?php

// Definir os usuários e senhas válidos
$usuariosValidos = array(
    'usuario1' => 'senha1',
    'usuario2' => 'senha2',
    // Adicione mais usuários conforme necessário
);

// Capturar os dados do formulário
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Verificar se o usuário e senha estão no array de usuários válidos
if (isset($usuariosValidos[$username]) && $usuariosValidos[$username] == $password) {
    // Login bem-sucedido
    header('Location: dashboard.php');
} else {
    // Login inválido
    echo 'Usuário ou senha inválido. Tente novamente.';
}
?>