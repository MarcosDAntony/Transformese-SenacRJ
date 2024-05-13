<?php

// Nomes de constantes válidos (que o PHP ainda não usou)
define("FOO",     "batata");
define("FOO2",    "cenoura");
define("FOO_BAR", "batata doce");

// Nomes de constantes inválidos (que o PHP já atribuiu algo a costante)
define("2FOO",    "Quiabo");

// Isso é válido, mas deve ser evitado:
// O PHP pode um dia fornecer uma constante mágica
// que quebrará seu script
define("__FOO__", "Pão");


// "\n" quebra de linha assim como o </br>
echo FOO,"\n";
echo __FOO__,"\n";
echo FOO_BAR,"\n";
?>