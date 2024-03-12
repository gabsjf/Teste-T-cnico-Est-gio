<?php

function isFibonacci($n) {
    $fibonacci = [0, 1];
    
    // Cálculo dos números até chegar no input oferecido
    while ($fibonacci[count($fibonacci) - 1] <= $n) {
        $fibonacci[] = $fibonacci[count($fibonacci) - 1] + $fibonacci[count($fibonacci) - 2];
    }
    
    // Verificando se o número dado está na sequência
    return in_array($n, $fibonacci);
}

// Solicitando o dado de entrada
echo "Digite um número para verificar se está na sequência de Fibonacci: ";
$numero = intval(fgets(STDIN));

// Chamando a função e exibindo o resultado
if (isFibonacci($numero)) {
    echo "O número $numero pertence à sequência de Fibonacci.\n";
} else {
    echo "O número $numero não pertence à sequência de Fibonacci.\n";
}

?>
