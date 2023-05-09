<?php

$idade = 18;
$numeroDePessoas = 1;

echo "Você só pode entrar se tiver a partir de 18 anos ou a partir de 16 anos acompanhado." . PHP_EOL;

if($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
} else if($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos e está acompanhado(a). Pode entrar.";
} else {
    echo "Você só tem $idade anos. Você não pode entrar.";
}

// -- Quando, após a verificação, houver apenas uma instrução, as chaves não são necessárias
// if($idade >= 18)
//     echo "Você tem $idade anos. Pode entrar sozinho.";
// elseif($idade >= 16 && $numeroDePessoas > 1)
//     echo "Você tem $idade anos e está acompanhado(a). Pode entrar.";
// else
//     echo "Você só tem $idade anos. Você não pode entrar.";

echo PHP_EOL;
echo 'Adeus!';