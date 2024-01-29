<<?php 
session_start();

// Limpar todas as variáveis de sessão
session_unset();

// Destruir a sessão
session_destroy();

// Redirecionar para a página principal
header('Location: ../../site/principal.php');
exit; 
?>

