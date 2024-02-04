<?php
    // Formulário de IMC(Índice de Massa Corporal)
    // IMC = peso/altura**2
    echo "==============Tabela IMC========================================================\n";
    echo "IMC(kg/m²)          Classificação\n";
    echo "menor que 16,9      Muito abaixo do peso\n";
    echo "17 a 18,4           Abaixo do Peso\n";
    echo "18,5 a 24,9         Peso Normal\n";
    echo "25 a 29,9           Acima do Peso\n";
    echo "30 a 34,9           Obesidade grau I\n";
    echo "35 a 40             Obesidade grau II\n";
    echo "Maior que 40        Obesidade grau III\n";

    echo "==============Formulário de IMC=================================================\n";
    //ucfirst() é o memso que o strtoupper() porém deixa somente a primeira letra Maiuscula...
    $name = ucfirst(readline("Nome: "));
    $idade = (int)readline("idade:");
    $sex =strtoupper(readline("Genêro (M / F):"));
    $pesokg = (float)readline("Peso(kg):");
    $altura = (float)(readline("Altura:"));
    $imc = $pesokg / ($altura * $altura);
    $imc = round($imc,2);

    if ($imc <= 16.99){
        echo "$name você está com IMC $imc e se classifica como 'Muito abaixo do peso'.\n";
        
    }
    elseif ($imc >= 17 and $imc <= 18.49 ) {
        echo "$name você está com IMC $imc e se classifica como 'Abaixo do Peso'.\n";
    } 
    elseif ($imc >= 18.59 and $imc <= 24.99){
        echo "$name você está com IMC $imc e se classifica como 'Peso Normal'.\n";
    }
    elseif($imc >= 25 and $imc <= 29.99){
        echo "$name você está com IMC $imc e se classifica como 'Acima do Peso'.\n";
    }
    elseif($imc >= 30 and $imc <= 34.99){
        echo "$name você está com IMC $imc e se classifica como 'Obesidade Iº'.\n";
    }
    elseif($imc >= 35 and $imc <= 40){
        echo "$name você está com IMC $imc e se classifica como 'Obesidade IIº'.\n";
    }
    else{
        echo "$name você está com IMC $imc e se classifica como 'Obesidade IIIº'.\n";
    }

    echo"============================================================================\n";