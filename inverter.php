<?php

function inverterString($string) {
    $stringInvertida = '';
    $tamanho = strlen($string);
    
    // Percorre a string ao contrário e adiciona os caracteres à nova string invertida
    for ($i = $tamanho - 1; $i >= 0; $i--) {
        $stringInvertida .= $string[$i];
    }
    
    return $stringInvertida;
}

// Solicitar o input
echo "Digite uma palavra para ser invertida: ";
$stringOriginal = fgets(STDIN);

// Remover quebras de linha extras
$stringOriginal = trim($stringOriginal);

// Inverter a string
$stringInvertida = inverterString($stringOriginal);

// Imprimir o resultado
echo "Palavra original: $stringOriginal\n";
echo "Palavra invertida: $stringInvertida\n";

?>