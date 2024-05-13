<?php
$escolha = (int) readline("Escolha uma das opções do Menu:");

switch ($escolha) {
    case 1:
        echo ("Você escolheu a opção 1");
        break;
    case 2:
        echo ("Você escolheu a opção 2");
        break;
    case 3:
        echo ("Você escolheu a opção 3");
        break;
    case 4:
        echo ("Você escolheu a opção 4");
        break;
    case 5:
         echo ("Você escolheu a opção 5");
        break;
    case 99:
        $sair = true;
        break;
    default:
        echo "Opção inválida.";
}

?>