<?php
/*
    Tabuada
*/
echo "================Tabuada================\n";
$multiplicador = (int)readline("Qual tabuada? ");

if ($multiplicador >= 1 and $multiplicador <= 9){ // <-- esse é para limitar o for da tabuada
    for ($repeat = 1; $repeat <= 10; $repeat++){
    echo $multiplicador ." x ". $repeat." = ". ($multiplicador * $repeat)."\n";
}
echo "========================================\n";
} else{
        echo "Esse número excede o limite da condição de 1 até 9!";
}



?>