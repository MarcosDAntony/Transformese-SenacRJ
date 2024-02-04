<?php
/*   
                                    Conversões (são funções)
    (int) converte para inteiro
    (float) converte para float ou double
    (string) converte para string
    (boolean) converte para boolean (true/false)
*/

    $nome = readline("Digite seu nome:");
    $idade  =(int) readline("idade:");
    //stroupper 
    $sex =strtoupper( readline("'M' para masculino / 'F' para feminino:"));

    if ($sex = "M" and $idade >=65){
        echo $nome." você já pode dar entrada no INSS...\n";

    } 
    elseif($sex = "F" and $idade >= 60){
        echo $nome." você já pode dar entrada no INSS...\n";
    }
     else{
        echo $nome." espera mais um pouco!\n\n\n\n";
    }
    

echo "Aqui abaixo estão os tipos gettype() de cada variavel:\n";
var_dump( gettype($nome));
var_dump( gettype($idade));
var_dump( gettype($sex));
























?>