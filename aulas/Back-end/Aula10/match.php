<?php
    $escolha = (int) readline("Escolha uma das opções do Menu:");
    echo match ($escolha){
        1 => casI(),
        2 => casII(),
        3 => casIII(),
        4 => casIV(),
        5 => casV(),
        99 => $sair = true
        default => ("Escolha Inválida \n")
    }

?>