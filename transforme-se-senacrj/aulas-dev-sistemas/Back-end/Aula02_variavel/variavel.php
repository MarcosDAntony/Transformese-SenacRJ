<?php
    /*
    tipos de impressão:
    utiliza-se echo gettype() para saber o tipo

    string 
    numbers (int, double ou float)
    boolean (true or false)
    array
    object
    null
    */


    $nome = ["Yago", "Thiago", "Roberta"];
    $var = 0;
    $bool = 3.14;

    
    echo gettype($nome)."\n";
    echo gettype($var)."\n";
    echo gettype($bool)."\n";
    
 ?>