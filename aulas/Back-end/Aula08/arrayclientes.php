<?php

$sair = false;
$clientes = [];

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
            $novoCliente = [
                'id' => count($clientes) + 1,
                'nome' => readline("Digite o nome do cliente: "),
                'cpf' => readline("Digite o CPF do cliente: "),
            ];
            $clientes[] = $novoCliente;
            echo "Cliente cadastrado com sucesso.\n";
            break;

        case 2:
            echo "Listando todos os registros...\n";
            if (empty($clientes)) {
                echo "Nenhum cliente cadastrado.\n";
            } else {
                foreach ($clientes as $cliente) {
                    echo "id: {$cliente['id']}, Nome: {$cliente['nome']}, CPF: {$cliente['cpf']}\n";
                }
            }
            break;

        case 3:
            echo "Listando Cliente por id...\n";
            $idParaListar = (int) readline("Digite o id do cliente a ser listado: ");
            $encontrado = false;
            foreach ($clientes as $cliente) {
                if ($cliente['id'] == $idParaListar) {
                    echo "id: {$cliente['id']}, Nome: {$cliente['nome']}, CPF: {$cliente['cpf']}\n";
                    $encontrado = true;
                    break;
                }
            }
            if (!$encontrado) {
                echo "Cliente com id {$idParaListar} não encontrado.\n";
            }
            break;

        case 4:
            echo "Editando registros...\n";
            $idParaEditar = (int) readline("Digite o id do cliente a ser editado: ");
            $encontrado = false;
            foreach ($clientes as $key => $cliente) {
                if ($cliente['id'] == $idParaEditar) {
                    $clientes[$key]['nome'] = readline("Novo nome do cliente: ");
                    $clientes[$key]['cpf'] = readline("Novo CPF do cliente: ");
                    echo "Cliente com id {$idParaEditar} editado com sucesso.\n";
                    $encontrado = true;
                    break;
                }
            }
            if (!$encontrado) {
                echo "Cliente com id {$idParaEditar} não encontrado.\n";
            }
            break;

        case 5:
            echo "Apagando registros...\n";
            $idParaApagar = (int) readline("Digite o id do cliente a ser apagado: ");
            $encontrado = false;
            foreach ($clientes as $key => $cliente) {
                if ($cliente['id'] == $idParaApagar) {
                    unset($clientes[$key]);
                    echo "Cliente com id {$idParaApagar} apagado com sucesso.\n";
                    $clientes = array_values($clientes); // Reindexa o array após a remoção
                    $encontrado = true;
                    break;
                }
            }
            if (!$encontrado) {
                echo "Cliente com id {$idParaApagar} não encontrado.\n";
            }
            break;

        case 99:
            echo "Saindo...\n";
            $sair = true;
            break;

        default:
            echo "Escolha inválida!\n";
    }
}
?>