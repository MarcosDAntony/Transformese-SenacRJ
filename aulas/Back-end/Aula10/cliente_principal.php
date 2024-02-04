<?php

require_once "funcoesMenu.php";


$sair = false;
//$clientes = [];

while ($sair == false) {
    echo "--------------------------------\n";
    echo "Menu CRUD Cliente:\n";
    echo" 1. Cadastrar Cliente\n";
    echo" 2. Listar Clientes\n";
    echo" 3. Listar Cliente por id\n";
    echo" 4. Editar Cliente\n";
    echo" 5. Apagar Cliente\n";
    echo" 99. Sair\n";

    $escolha = (int) readline("Escolha uma das opções do Menu: ");

    switch ($escolha) {

        case 1:
            echo "Cadastrando registros...\n";
            cadastrarClientes();
            break;

        case 2:
            echo "Listando todos os registros...\n";
            listarClientes();
            break;

        case 3:
            echo "Listando Cliente por id...\n";
            listarClientesPorid();
            break;

        case 4:
            echo "Editando registros...\n";
            editandoRegistros();
            break;

        case 5:
            echo "Apagando registros...\n";
            apagarRegistros();
            break;

        case 99:
            echo "Saindo...\n";
            $sair = true;
            break;
            

        default:
    
    }
}
?>