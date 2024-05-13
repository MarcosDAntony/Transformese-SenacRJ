<?php

//Index sem os desafios:
// * Adicione a funcionalidade para que o usuário possa ordenar a lista de tarefas por tarefa ou status.
// * Adicione a funcionalidade para que o usuário possa pesquisar tarefas por tarefa ou status.

// Conexão com o banco de dados
require_once('config.php');


// Cabeçalho da página
echo "<h1>Lista de tarefas</h1>";

echo "<form action='/action_page.php'>";
echo "<fieldset>";
echo "<legend>Pesquisar</legend>";
echo " <input type='radio' id='rdpesquisar_tarefa' name='tipo_pesquisa' value='tarefa' checked>";
echo " <label for='rdpesquisar_tarefa'>Tarefa</label>";
echo " <input type='radio' id='rdpesquisar_status' name='tipo_pesquisa' value='status'>";
echo " <label for='rdpesquisar_status'>Status</label><br>";

// echo "<label for='fname'>First name:</label>";
echo "<input type='text' id='fname' name='fname'>";
echo "<input type='submit' value='Pesquisar'>";
echo "</fieldset>";
echo "</form>";

echo "<br>";
// Botão para adicionar uma nova tarefa
echo "<a href='tarefas_cadastro_tela.php'>Adicionar tarefa</a>";

// Lista de tarefas
$tarefas = mysqli_query($conn, "SELECT * FROM tarefas ORDER BY id");

// Loop para exibir as tarefas
while ($tarefa = mysqli_fetch_assoc($tarefas)) {
    echo "<p>";
    echo "<strong>Tarefa:</strong> " . $tarefa['tarefa'];
    echo "<br>";
    echo "<strong>Status:</strong> " . $tarefa['status'];
    echo "<a href='tarefas_editar_tela.php?id={$tarefa['id']}'> Editar</a>";
    echo " | ";
    echo "<a href='excluir.php?id={$tarefa['id']}'> Excluir</a>";
    echo "</p>";
}


// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>
