<?php
//**7. Exercício Adicional: Consulta de CEP Dinâmica
//Crie uma função em PHP que recebe um CEP como parâmetro e faz uma requisição GET à API Via Cep (https://viacep.com.br/). A função deve imprimir os dados do endereço separados por linha.

$viacep_get = "https://viacep.com.br/ws/01001000/json/";
$response_get = file_get_contents($viacep_get);
$data_get = json_decode($response_get, true);

print_r($data_get);
print_r($data_get['cep']);

?>