<?php
// Null coalescing operator ?? (então se)
    $nome = Null;
    $nome = $nome ?? "Marquin";

    echo $nome;

    // isset() tag
    // Operador Ternário (if na mesma linha)
// ? (então), : (senão), ==(igual), = (recebe)
    $nome = $nome == Null ? "Marquin" : $nome;
// $nome = if ($nome == null) {"Marquin"} else {$nome};
?>