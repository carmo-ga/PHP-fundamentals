<?php

$idade = 21;

// -- Não ocorre a concatenação. Com aspas simples o PHP não interpreta valores de variáveis.
// echo 'Olá mundo! Minha idade é $idade';

// -- Concatenação verbosa
// echo 'Olá mundo! Minha idade é ' . $idade;

// -- Concatenação com aspas duplas
// echo "Olá mundo! Minha idade é $idade";

// -- Quebra de linha com caracter especial
// echo "Olá mundo!\n";
// echo "\t"; // -- Corresponde ao Tab
// echo "Eu tenho $idade anos.";

// -- Quebra de linha com a constante PHP que considera os diferentes caracteres utilizados para quebrar linha em diferentes sistemas operacionais.
echo "Olá mundo!" . PHP_EOL;
echo "Eu tenho \"$idade\" anos."; // -- Exibe as aspas