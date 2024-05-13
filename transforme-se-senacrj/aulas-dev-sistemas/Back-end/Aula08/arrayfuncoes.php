<?php



$frutas = ["maçã", "banana", "laranja"];

// Adicionar um elemento ao final do array
array_push($frutas, "uva");

// Remover o último elemento do array
array_pop($frutas);

// Juntar dois arrays
$outrasFrutas = ["pêra", "kiwi"];
$todasFrutas = array_merge($frutas, $outrasFrutas);

// Encontrar a posição de um elemento no array
$posicao = array_search("banana", $frutas);

// Definirse um elemento existe em um array. Retorna TRUE se existir e FALSE senão.
$frutas = ["maçã", "banana", "laranja", "uva", "pêra"];

// Verificar se a fruta "laranja" está no array
$frutaProcurada = "laranja";
if (in_array($frutaProcurada, $frutas)) {
 echo $frutaProcurada . " foi encontrada no array de frutas.";
} else {
 echo $frutaProcurada . " não foi encontrada no array de frutas.";
}


?>