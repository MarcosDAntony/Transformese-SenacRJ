<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

function errorHandler($errno, $errstr, $errfile, $errline){
    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
}

set_error_handler('errorHandler');

try{
    //$array = [1,2,3];
    // echo $array[4]; //Tentando acessar um índice inválido
    $result = 10/0;
} catch(Exception $e){
    echo 'Erro: '.$e->getMessage().PHP_EOL;
} finally{
    echo 'Bloco finally executado'.PHP_EOL;
}

echo 'O programa passou do erro'.PHP_EOL;
?>