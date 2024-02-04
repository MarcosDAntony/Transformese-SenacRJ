<?php
// Conexão com o banco de dados
require_once('config.php');


// Recupera os dados do formulário
$id = $_POST['id'];
$tarefa = $_POST['tarefa'];
$status = $_POST['status'];

// Atualiza a tarefa no banco de dados
$sql = "UPDATE tarefas SET tarefa='$tarefa', status='$status' WHERE id=$id";
mysqli_query($conn, $sql);

// Redireciona para a página principal
header("Location: index.php");

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>
