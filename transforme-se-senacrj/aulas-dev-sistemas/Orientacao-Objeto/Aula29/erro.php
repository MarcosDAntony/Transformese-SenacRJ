<?php

try{
$var = 500 / 0.2;
echo "$var";
} catch (Exception $e){
    //Tratamento da excessão
    echo "Erro de divisão por zero";
}
?>