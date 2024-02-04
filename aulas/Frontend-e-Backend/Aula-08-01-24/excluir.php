<?php

// Conexão com o banco de dados
require_once('config.php');


// Exclui a tarefa do banco de dados
$id = $_GET['id'];
$sql = "DELETE FROM tarefas WHERE id=$id";
mysqli_query($conn, $sql);

// Redireciona para a página principal
header("Location: index.php");

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>
