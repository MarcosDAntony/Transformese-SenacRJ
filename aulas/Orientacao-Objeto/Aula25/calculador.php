<?php
/*2. Crie uma classe `Calculadora` com métodos para adição, subtração, multiplicação e divisão. Teste esses métodos com diferentes valores.*/
class Calculadora{
    function soma(){
    $n1 = readline();
    $n2 = readline();
        $tot = $n1 + $n2;
        echo "A soma foi: {$tot}";
    }

    function multiplicacao(){
    $n1 = readline();
    $n2 = readline();
        $tot = $n1 * $n2;
        echo "A soma foi: {$tot}";
    }

    function subtrair(){
        $n1 = readline();
        $n2 = readline();
            $tot = $n1 - $n2;
            echo "A subtração foi: {$tot}";
    }


    function potencia(){
        $n1 = readline();
        $n2 = readline();
            $tot = $n1 ** $n2;
            echo "A potência foi: {$tot}";
    }
}

$resultado = new Calculadora;
$resultado -> multiplicacao();
$resultado -> subtrair();
print_r($resultado);
?>