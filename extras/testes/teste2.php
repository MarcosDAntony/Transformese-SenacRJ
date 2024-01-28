<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cliente_id = $_POST['cliente_id'];
    $cliente_nome = $_POST['cliente_nome'];
    $nota = $_POST['nota'];

    // Aqui você pode adicionar a lógica para salvar a nota no banco de dados ou em um arquivo, por exemplo.
    // Neste exemplo, a nota será apenas exibida.

    echo "Nota salva para o cliente $cliente_nome (ID: $cliente_id):\n\n$nota";
} else {
    // Redireciona para a página de administração se alguém tentar acessar diretamente salvar_nota.php.
    header("Location: admin.php");
    exit();
}
?>