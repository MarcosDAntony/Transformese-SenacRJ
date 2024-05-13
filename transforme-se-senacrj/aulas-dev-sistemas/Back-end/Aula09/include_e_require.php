<?php

// Include e Require ========

// **Aula para Iniciantes em PHP: Include, Require, Include_once e Require_once**

// Nesta aula, vamos aprender sobre quatro comandos fundamentais em PHP que são usados para incluir arquivos em um script. 
// Isso é especialmente útil para reutilizar código e organizar seu projeto de maneira mais eficiente. 
// Os quatro comandos que vamos abordar são `include`, `require`, `include_once` e `require_once`. Vamos explicar cada um deles com exemplos práticos.

// **1. Include**

// O comando `include` é usado para incluir um arquivo em seu código.  
// Se o arquivo não for encontrado, o PHP emitirá um aviso, mas o script continuará a ser executado. 
// O `include` é útil quando você deseja incluir um arquivo que não é essencial para a execução do script.

// **Exemplo de uso do `include`:** 


// include 'meu_arquivo.php';
// echo 'Este é o restante do meu código.';



// **2. Require**

// O comando `require` é semelhante ao `include`, mas com uma diferença importante: 
// se o arquivo especificado não for encontrado, o PHP emitirá um erro fatal e o script será encerrado. Use `require` quando o arquivo incluído é essencial para o funcionamento do script.

// **Exemplo de uso do `require`:**

$linguagens = include 'meu_arquivo.php';
print_r($linguagens)."\n";

// require 'meu_arquivo.php';
// echo "Este é o restante do meu código.\n";
// echo "Eu sou a outra linha";

// **3. Include_once**

// O comando `include_once` é usado para incluir um arquivo, mas o PHP verifica se o arquivo já foi incluído antes. Se já foi incluído, o PHP não o incluirá novamente. 
// Isso evita problemas de redeclaração de funções e variáveis.

// **Exemplo de uso do `include_once`:**


// include_once 'meu_arquivo.php';
// include_once 'meu_arquivo.php'; // Não será incluído novamente
// echo 'Este é o restante do meu código.';



// **4. Require_once**

// O comando `require_once` funciona da mesma forma que o `include_once`, mas com a diferença de que, 
// se o arquivo não for encontrado, ele emitirá um erro fatal e encerrará a execução do script.

// **Exemplo de uso do `require_once`:**


// require_once 'meu_arquivo.php';
// require_once 'meu_arquivo.php'; // Não será incluído novamente
// echo 'Este é o restante do meu código.';



// É importante notar que os caminhos para os arquivos incluídos devem ser especificados corretamente. 
// Você pode usar caminhos absolutos ou relativos, dependendo da estrutura do seu projeto.

// Em resumo, os comandos `include`, `require`, `include_once` e `require_once` são ferramentas poderosas para reutilização de código em PHP. 
// Escolha o comando apropriado com base na importância do arquivo incluído para o funcionamento do seu script e na possibilidade de redeclaração de funções e variáveis. 
// Certifique-se de verificar os caminhos dos arquivos para garantir que eles sejam encontrados corretamente. 

?>