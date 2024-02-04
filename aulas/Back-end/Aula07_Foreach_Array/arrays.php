<<?php
// Arrays em PHP
// - Um array é uma estrutura de dados que pode armazenar múltiplos valores em uma única varavel 
// - Tipos de arrays em PHP: numéricos (índces inteiros), associativos (índices nomeados), 
// - multidimensionais (arrays dentro de arrays).
// - Duas sintaxes para criar arrays: 
// $alfabeto = array("a","b","c");
//$numeros = array(1, 2, 3, 4, 5);
//$pessoa = array("nome" => "João", "idade" => 25);

// OU
//$idades = [20, 21, 30, 42, 50];
//$vendas = ["feijao" => 30, "arroz" => 25];

// echo "A letra escolhida é: " . $alfabeto[1] . "\n";
// $alfabeto[1] = "Z";
// echo "A letra escolhida é: " . $alfabeto[1] . "\n";
// print_r($alfabeto);

//print_r($numeros);
//var_dump($numeros);
//print_r($idades);
//var_dump($idades);


//$ligaDaJustica = ["batman" => "super dinheiro", "superman" => "super força", "flash" => "super velocidade"];
//print_r($ligaDaJustica);



$carlos = ["mat" => 123, "nome" => "Carlos", "nota" => 10];
//print_r($carlos);
$karine = ["mat" => 321, "nome" => "Karine", "nota" => 11];
//print_r($karine);

$alunos = [$carlos,$karine];

print_r($alunos[0]["nome"]);


?>

