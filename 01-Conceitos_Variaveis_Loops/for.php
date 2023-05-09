<?php

for($contador = 1; $contador <= 15; $contador++) {
    if($contador == 13) {
        // continue; // -- Pula uma iteração (continua para a seguinte)
        break; // -- Sai completamente da estrutura de repetição
    }
    
    echo "#$contador" . PHP_EOL;
}