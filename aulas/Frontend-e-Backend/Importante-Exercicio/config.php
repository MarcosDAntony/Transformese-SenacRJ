<?php

// Conexão com o banco de dados
$conn = mysqli_connect("localhost", "root", "", "tabela_tarefas");

// Verifica se a conexão foi bem-sucedida
if (!$conn) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}

?>