<?php

// Conexão com o banco de dados
require_once('config.php');


// Recupera os dados da tarefa
$id = $_GET['id'];
$tarefa = mysqli_query($conn, "SELECT * FROM tarefas WHERE id=$id");
$tarefa = mysqli_fetch_assoc($tarefa);

// Cabeçalho da página
echo "<h1>Editar tarefa</h1>";

// Exibe os dados da tarefa
echo "<p>";
echo "<strong>Tarefa:</strong> " . $tarefa['tarefa'];
echo "<br>";
echo "<strong>Status:</strong> " . $tarefa['status'];
echo "</p>";

// Formulário para editar a tarefa
echo "<form action='editar.php' method='post'>";
echo "<input type='hidden' name='id' value='$id'>";
echo "<input type='text' name='tarefa' value='$tarefa[tarefa]'>";
echo "<select name='status'>";
echo "<option value='Pendente' selected>Pendente</option>";
echo "<option value='Concluída'>Concluída</option>";
echo "</select>";
echo "<input type='submit' value='Salvar'>";
echo "</form>";

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>
