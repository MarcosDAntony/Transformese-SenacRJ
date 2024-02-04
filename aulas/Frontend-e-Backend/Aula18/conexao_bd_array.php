<?php

// O Array usuariosBD vai simular uma tabela de banco de dados e serão adicionados novos 
// usuários (array com dados dos usuários) em cada nova posição.

//Cria uma sessão que será compartilhada entre as paginas
session_start();

// Inicializa $_SESSION['usuariosBD'] como um array vazio se ainda não estiver definida
$_SESSION['usuariosBD'] = isset($_SESSION['usuariosBD']) ? $_SESSION['usuariosBD'] : [];


?>