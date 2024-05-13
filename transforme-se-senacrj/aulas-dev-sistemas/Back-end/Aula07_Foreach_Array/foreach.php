<?php
    /*
    9. Loop 'Foreach'
    - Introdução ao 'Foareach', que é usado para percorrer arrays de maneira mais simples
    */

    $cores = ["red","blue","green"];
    foreach($cores as $cor){ // as joga o $cores índice [0] para a variavel $cor
        echo $cor . " \n";
        echo "Minha cor favorita é $cor\n";
    }
?>