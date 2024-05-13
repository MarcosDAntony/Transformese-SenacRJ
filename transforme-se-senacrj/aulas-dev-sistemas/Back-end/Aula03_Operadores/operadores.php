<?php
    /* Aritmetic Operator's

    - = Subtraction
    * = Multiplication
    / = Division
    % = Modulo
    ** = Exponential
    . é concatenação ou junção
    = é lido como recebimento
    === é lido como igual
    != diferença


    Obs: a * e / vem primeiro das demais operações se tiver () entre a op. a e b tiver soma ou subtração ela vira primeiro
    */
$a = 5; $b = 7; $c = 0;

echo "Temos os termos {$a}, {$b}, e {$c} sendo C = (operação em cada sinal de A e B)\n";
// +
$c = $a + $b;
echo "Soma igual a ". $c."\n";


// -
$c = $a - $b;
echo "Subtração é igual a ".$c."\n";

//* 
$c = $a * $b;
echo "Multiplicação igual a ".$c."\n";

//  /
$c = $a / $b;
echo "Divisão igual a ".$c."\n";

// %
$c = $a % $b;
echo "O resto da divisão é ".$c."\n";

// **
$c = $a ** $b;
echo "A potência é ".$c."\n";


// .
$c = $a.$b;
echo "A concatenação é ".$c."\n";

// ===
$c = $a === $b;
echo "Igual a = {$c}\n";


// === (despejo de memoria de variavel, valor e tipo)
$c = $a === $b;
echo "Igual a = {$c}\n";
var_dump($c);



// === (despejo de memoria de variavel comparando valor)
$a=1; $b="1";
$c = $a === $b;
echo "Igual a = {$c}\n";
var_dump($c);
    

// !(var, string) (Negação) nega valores lógicos entre true e false
$a = 1; $b=1;
!$c = $a == $b;
echo "Igual a = {$c}\n";
var_dump($c);


// != (despejo de memoria de variavel diferente ou não igual)
$c = $a === $b;
$c = $a != $b;
echo "Igual a = {$c}\n";
var_dump($c);



// === (despejo de memoria de variavel diferente igual)
$a=1; $b="1";
$c = $a === $b;
echo "Igual a = {$c}\n";
var_dump($c);


//Atalhos de operações com variaveis as recebendo para si, sem necessidade de uma terceira.
$a = 1; $b =2;
$a+= $b; // -->  $a = $a + $b
echo "Igual a {$a}\n"; 
    ?>