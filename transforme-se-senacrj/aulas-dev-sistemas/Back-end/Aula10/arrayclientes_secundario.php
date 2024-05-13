<?php

$clientes = [];


function cadastrarClientes(){
    global $clientes;
    $novoCliente = [
        'id' => count ($clientes) + 1,
        'nome' => readline("Digite o nome do cliente: "),
        'cpf' => readline("Digite o CPF do cliente: "),
    ];
    $clientes[] = $novoCliente;
    echo "Cliente cadastrado com sucesso.\n";
};

function listarClientes(){
    global $clientes;
    if (empty($clientes)) {
        echo "Nenhum cliente cadastrado.\n";
    } else {
        foreach ($clientes as $cliente) {
            echo "id: {$cliente['id']}, Nome: {$cliente['nome']}, CPF: {$cliente['cpf']}\n";
        }
    }
};


function listarClientesPorid(){
    global $clientes;
    $idParaListar = (int) readline("Digite o id do cliente a ser listado: ");
    $encontrado = false;
    foreach ($clientes as $cliente) {
        if ($cliente ['id'] == $idParaListar ) {
            echo "id: {$cliente['id']}, Nome: {$cliente['nome']}, CPF: {$cliente['cpf']}\n";
            $encontrado = true;
            break;
        }
    }
    if (!$encontrado) {
        echo "Cliente com id {$idParaListar} não encontrado.\n";
    }
}


function editandoRegistros(){
    global $clientes;
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
}

function apagarRegistros(){
    global $clientes;
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
}



?>