<?php
    // Criar um menu com 5 opções (usar while e switch)
    $sair = false;
    

    
    while ($sair == false){
    echo "\n=============Menu====================\n";
    echo " 1.Listar\n 2.Cadastre \n 3.Apagar \n 4.Editar \n 99.Sair\n";
    echo "\n=====================================\n";
    $digite = (int)readline(": ");

     switch($digite){
        case 1:
        echo "Listando registros.....\n";
        break;
        case 2:
        echo "Cadastrando.....\n";
        break;
        case 3:
        echo "Apagando Registros.....\n";
        break;
        case 4:
        echo "Editando Registros....";
        break;
        case 99:
        echo "Saindo...\n";
        $sair = true;
        break;
        default:
        echo "Opção não valida!\n";
     }
    }
?>
