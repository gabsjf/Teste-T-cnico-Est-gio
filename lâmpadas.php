<?php

function identificarInterruptores($interruptor1, $interruptor2, $interruptor3) {
    // Primeira tentativa: ligar o interruptor1 e esperar alguns minutos
    ligarInterruptor($interruptor1);
    sleep(2); // Espera 2 segundos - simulação de minutos
    desligarInterruptor($interruptor1);
    
    // Segunda tentativa: ligar o interruptor1 e depois ligar o interruptor2
    ligarInterruptor($interruptor1);
    ligarInterruptor($interruptor2);
    sleep(2); // Espera 2 segundos simulação de miutos
    
    // Verifica o estado das lâmpadas
    $lampada1 = estadoLampada();
    
    // Desligar todos os interruptores antes de voltar
    desligarInterruptor($interruptor1);
    desligarInterruptor($interruptor2);
    desligarInterruptor($interruptor3);
    
    // Retorna resultado
    switch ($lampada1) {
        case 'acesa':
            return "O interruptor $interruptor1 controla a lâmpada que está acesa, o interruptor $interruptor2 controla a lâmpada que está quente e o interruptor $interruptor3 controla a lâmpada que está fria.";
        case 'quente':
            return "O interruptor $interruptor1 controla a lâmpada que está quente, o interruptor $interruptor2 controla a lâmpada que está acesa e o interruptor $interruptor3 controla a lâmpada que está fria.";
        case 'fria':
            return "O interruptor $interruptor1 controla a lâmpada que está fria, o interruptor $interruptor2 controla a lâmpada que está acesa e o interruptor $interruptor3 controla a lâmpada que está quente.";
    }
}

function ligarInterruptor($interruptor) {
    // Simula ligar o interruptor
    echo "Interruptor $interruptor ligado.\n";
}

function desligarInterruptor($interruptor) {
    // Simula desligar o interruptor
    echo "Interruptor $interruptor desligado.\n";
}

function estadoLampada() {
    // Simula o estado das lâmpadas
    $estado = rand(1, 3);
    switch ($estado) {
        case 1:
            return 'acesa';
        case 2:
            return 'quente';
        case 3:
            return 'fria';
    }
}

// Chamada da função para identificar os interruptores
echo identificarInterruptores(1, 2, 3);



?>
