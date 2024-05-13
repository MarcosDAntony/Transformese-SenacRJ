<?php

// # Aula de PHP: Escopo de Variáveis

// ## Descrição:

// Nesta aula, vamos explorar o conceito de escopo de variáveis em PHP. O escopo de uma variável determina onde ela pode ser acessada e modificada no código. Existem diferentes níveis de escopo em PHP, como local, de função, global, super global e escopo das chaves (variável continua existindo). Compreender o escopo é fundamental para escrever código eficiente e evitar conflitos de variáveis.

// ## Tópicos a serem abordados:

// 1. **Escopo Local:**
//    - Variáveis definidas dentro de funções só são visíveis dentro dessa função.
//    - Exemplo:
     
     function escopoLocal() {
         $localVar = 10;
         echo $localVar;
     }
     escopoLocal();
 
     echo $localVar; // Isso geraria um erro, $localVar não é visível fora da função.
     

// 2. **Escopo de Função:**
//    - Variáveis definidas como parâmetros de uma função ou dentro dela são visíveis apenas dentro da função.
//    - Exemplo:
     
//      function escopoDeFuncao($parametro) {
//          $funcaoVar = 20;
//          echo $parametro + $funcaoVar;
//      }
//      escopoDeFuncao(5);
//      //echo $parametro; // Isso geraria um erro, $parametro não é visível fora da função.
     

// 3. **Escopo Global:**
//    - Variáveis globais são definidas fora de funções e podem ser acessadas em qualquer lugar do código.
//    - Exemplo:
     
//      $globalVar = 30;
//      function escopoGlobal() {
//          global $globalVar;
//          echo $globalVar;
//      }
//      escopoGlobal();
//      echo $globalVar; // Variáveis globais podem ser acessadas fora da função.
     
// O `$GLOBALS` é outra maneira de acessar variáveis globais diretamente, sem precisar usar a palavra-chave `global`. Vamos adicionar essa parte à aula:

// ## Acessando Variáveis Globais com `$GLOBALS`:

// - O array `$GLOBALS` contém todas as variáveis globais do escopo global, permitindo acessá-las sem a necessidade da palavra-chave `global`.

// Exemplo:
// $globalVar = 50;

// function exemploEscopo($parametro) {
//     $funcaoVar = 10;
//     echo "Variável Local: " . $funcaoVar . "\n";
//     echo "Variável Global (usando \$GLOBALS): " . $GLOBALS['globalVar'] . "\n";
//     echo "Variável de Função: " . ($parametro + $funcaoVar) . "\n";
// }

// exemploEscopo(5);
// echo "Variável Global fora da função: " . $globalVar;

// Agora, o acesso à variável global `$globalVar` é feito usando `$GLOBALS['globalVar']`. Isso permite que você acesse variáveis globais de maneira eficiente sem precisar declarar `global $globalVar` dentro da função. O resultado será o mesmo, e a variável global ainda pode ser acessada fora da função.

// 4. **Super Global:**
//    - Super globais são arrays que armazenam informações importantes e podem ser acessados de qualquer lugar do código.
//    - Exemplos de super globais:
//      - `$_GET`: Dados enviados via URL.
//      - `$_POST`: Dados enviados por formulários.
//      - `$_SESSION`: Dados de sessão do usuário.
//      - `$_COOKIE`: Dados de cookies.
//      - `$_SERVER`: Informações sobre o servidor.
//      - Exemplo:
       
//        echo $_GET['parametro']; // Acessando um valor passado via URL.
       

// 5. **Escopo das Chaves (Variável Continua Existindo):**
//    - Variáveis definidas fora de um bloco de código (por exemplo, um loop ou uma estrutura condicional) continuam a existir após o bloco.
//    - Exemplo:
     
//      $forVar = 0;
//      for ($i = 1; $i <= 5; $i++) {
//          $forVar += $i;
//      }
//      echo $forVar; // $forVar ainda existe e contém o valor calculado no loop.
     

// ## Exercício Prático:

// Escreva um código em PHP que demonstre os conceitos de escopo de variáveis, utilizando as diferentes formas de escopo mencionadas acima. Por exemplo, você pode criar uma função que recebe uma variável global como parâmetro e depois acessá-la dentro da função.


// $globalVar = 50;

// function exemploEscopo($parametro) {
//     $funcaoVar = 10;
//     global $globalVar;
//     echo "Variável Local: " . $funcaoVar . "\n";
//     echo "Variável Global: " . $globalVar . "\n";
//     echo "Variável de Função: " . ($parametro + $funcaoVar) . "\n";
// }

// exemploEscopo(5);
// echo "Variável Global fora da função: " . $globalVar;


// ## Resumo:

// Nesta aula, você aprendeu sobre os diferentes níveis de escopo de variáveis em PHP, incluindo local, de função, global, super global e o conceito de escopo das chaves. É importante compreender como as variáveis são acessadas e modificadas em diferentes partes do código para escrever scripts eficientes e evitar conflitos de variáveis. Pratique esses conceitos em seus próprios projetos para aprofundar sua compreensão.

?>