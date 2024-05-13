<?php
//Index com os desafios:
// * Adicione a funcionalidade para que o usuário possa marcar uma tarefa como concluída.
// * Adicione a funcionalidade para que o usuário possa ordenar a lista de tarefas por tarefa ou status.
// * Adicione a funcionalidade para que o usuário possa pesquisar tarefas por tarefa ou status.


// Conexão com o banco de dados
require_once('config.php');

// Cabeçalho da página
echo "<h1>Lista de tarefas</h1>";

// Formulário de pesquisa
echo "<form action='index.php'>";
echo "<fieldset>";
echo "<legend>Pesquisar</legend>";

echo "<input type='radio' id='rdpesquisar_tarefa' name='tipo_pesquisa' value='tarefa' checked>";
echo "<label for='rdpesquisar_tarefa'>Tarefa</label>";
echo "<input type='radio' id='rdpesquisar_status' name='tipo_pesquisa' value='status'>";
echo "<label for='rdpesquisar_status'>Status</label><br>";
echo "<input type='text' id='txtpesquisa' name='txtpesquisa'>";
echo "<input type='submit' value='Pesquisar'>";
echo "</fieldset>";
echo "</form>";

// Adicionar a funcionalidade de ordenação
$ordenarPor = isset($_GET['ordenar_por']) ? $_GET['ordenar_por'] : 'id';
$ordem = isset($_GET['ordem']) ? $_GET['ordem'] : 'ASC';

// Adicionar a funcionalidade de pesquisa
$tipoPesquisa = isset($_GET['tipo_pesquisa']) ? $_GET['tipo_pesquisa'] : 'tarefa';
$termoPesquisa = isset($_GET['txtpesquisa']) ? $_GET['txtpesquisa'] : '';

// Formulário para escolher a ordenação
echo "<form action='index.php' method='get'>";
echo "<label for='ordenar_por'>Ordenar por:</label>";
echo "<select name='ordenar_por'>";
echo "<option value='tarefa' " . ($ordenarPor == 'tarefa' ? 'selected' : '') . ">Tarefa</option>";
echo "<option value='status' " . ($ordenarPor == 'status' ? 'selected' : '') . ">Status</option>";
echo "</select>";

echo "<label for='ordem'> Ordem:</label>";
echo "<select name='ordem'>";
echo "<option value='ASC' " . ($ordem == 'ASC' ? 'selected' : '') . ">Ascendente</option>";
echo "<option value='DESC' " . ($ordem == 'DESC' ? 'selected' : '') . ">Descendente</option>";
echo "</select>";

echo "<input type='submit' value='Ordenar'>";
echo "</form>";

// Botão para adicionar uma nova tarefa
echo "<a href='tarefas_cadastro_tela.php'>➕Adicionar Tarefa</a>";

// Lista de tarefas com ordenação e pesquisa
$sql = "SELECT * FROM tarefas WHERE $tipoPesquisa LIKE '%$termoPesquisa%' ORDER BY $ordenarPor $ordem";
$tarefas = mysqli_query($conn, $sql);

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
