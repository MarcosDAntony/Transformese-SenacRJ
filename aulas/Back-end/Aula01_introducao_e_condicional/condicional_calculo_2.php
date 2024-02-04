<?php
    $notI = 6;
    $notII = 9;
    $medianot = ($notI + $notII) /2;


    if ($medianot >= 7.0){
        echo "APROVADO! com média $medianot. \n";
        echo "Parabéns venha pegar seu certificado semana que vem!  \n";
    } elseif ($medianot < 7.0){
        echo "REPROVADO! com média $medianot.\n";
        echo "Tente no próximo ano!\n";
    } else{
        echo "RECUPERAÇÃO! com média $medianot. \n";
        echo "Prova na próxima semana!\n";
    }

    ?>
    