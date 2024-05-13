<?php

// Conexão com o banco de dados
require_once('config.php');

// Recupera os dados do formulário
$tarefa = $_POST['tarefa'];
$status = $_POST['status'];

// Insere a tarefa no banco de dados
$sql = "INSERT INTO tarefas (tarefa, status) VALUES ('$tarefa', '$status')";
mysqli_query($conn, $sql);

// Redireciona para a página principal
header("Location: index.php");

// Fecha a conexão com o banco de dados
mysqli_close($conn);



?>
