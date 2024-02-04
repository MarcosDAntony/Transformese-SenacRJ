<?php

//valores dentro da função.

// *Exemplo:*

// // Função com parâmetros
// function soma($a, $b) {
//     $resultado = $a + $b;
//     echo "A soma de $a e $b é $resultado";
// }

// // Chamando a função com argumentos
// soma(5, 3); // Saída: A soma de 5 e 3 é 8


// Tópico 3: Retorno de Funções

// *Conteúdo Teórico:*
// - Funções podem retornar valores usando a palavra-chave `return`.
// - O valor retornado pode ser usado em outras partes do código.
// - Você pode ter funções que não retornam valores, nesse caso, elas retornam `null`.

// *Exemplo:*

// // Função com retorno
// function quadrado($num) {
//     return $num * $num;
// }

// // Chamando a função e armazenando o resultado
// $resultado = quadrado(4);
// echo "O quadrado de 4 é $resultado"; // Saída: O quadrado de 4 é 16


// Tópico 4: Parâmetros Opcionais e Valores Padrão

// *Conteúdo Teórico:*
// - Parâmetros opcionais não precisam ser passados ao chamar a função.
// - Valores padrão podem ser definidos para parâmetros opcionais.
// - Isso permite maior flexibilidade ao chamar a função.

// *Exemplo:*

// // Função com parâmetros opcionais e valores padrão
// function cumprimento($idade,$nome = "Mundo") {
//     echo "Olá, $nome tenho $idade anos !\n";
// }

// // Chamando a função com e sem argumento
// cumprimento(21); // Saída: Olá, Mundo!
// cumprimento(21,"Alice"); // Saída: Olá, Alice!


// Tópico 5: Argumentos de Comprimento Variável (Rest)

// *Conteúdo Teórico:*
// - O operador `...` permite criar funções com argumentos de comprimento variável.
// - Você pode passar um número indefinido de argumentos.
// - Os argumentos são tratados como um array dentro da função.

// *Exemplo:*

// // Função com argumentos de comprimento variável
// ...$numero se tornou um array de parametros 
// function media(...$numeros) {
//     $total = array_sum($numeros);
//     $quantidade = count($numeros);
//     return $total / $quantidade;
// }

// // Chamando a função com diferentes números de argumentos
// echo "A média é: " . media(2, 4, 6); // Saída: A média é: 4


// Tópico 6: Funções Integradas (func_num_args, func_get_arg, func_get_args)

// *Conteúdo Teórico:*
// - `func_num_args` retorna o número de argumentos passados para a função.
// - `func_get_arg` permite acessar um argumento específico por sua posição.
// - `func_get_args` retorna todos os argumentos em um array.

// *Exemplo:*

function minhaFuncao() {
    $numArgs = func_num_args();
    $primeiroArg = func_get_arg(0);
    $todosArgs = func_get_args();
    
    echo "Número de argumentos: $numArgs\n";
    echo "Primeiro argumento: $primeiroArg\n";
    echo "Todos os argumentos: ";
    print_r($todosArgs);
}

minhaFuncao(10, "Hello", 3.14);

// // Saída:
// // Número de argumentos: 3
// // Primeiro argumento: 10
// // Todos os argumentos: Array ( [0] => 10 [1] => Hello [2] => 3.14 )


// Tópico 7: Boas Práticas na Criação de Funções

// *Conteúdo Teórico:*
// - Dicas para escolher nomes descritivos para funções.
// - A importância de comentários e documentação.
// - Organização e reutilização de funções.

// Tópico 8: Exercícios Práticos

// *Exemplos:*
// - Resolver exercícios práticos que envolvem a criação de funções com diferentes características aprendidas na aula.

// Tópico 9: Perguntas e Discussões

// *Conteúdo Teórico:*
// - Esclarecimento de dúvidas e discussões sobre funções em PHP.

// Conclusão:

// *Conteúdo Teórico:*
// - Recapitulação dos principais pontos da aula.
// - Incentivo à prática e ao aprofundamento no uso de funções em PHP.

// Atividade de Casa:

// *Exemplo:*
// - Propor aos alunos a criação de uma função PHP que calcule a média de um conjunto de números passados como argumentos. Eles devem usar parâmetros opcionais, valores padrão e argumentos de comprimento variável, conforme aprendido na aula.


?>