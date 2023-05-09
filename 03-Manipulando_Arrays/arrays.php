<?php

$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'três'
];

foreach ($array as $numeral => $nomeDoNumero) {
    echo "$numeral em português é: $nomeDoNumero" . PHP_EOL;
}

echo "Total: " . count($array) . PHP_EOL;

$array2 = [
    'um',
    'dois',
    'três'
];


$array3 = [
    'um',
    1 => 'dois',
    'três'
];

var_dump(array_is_list($array2)); // Retorna true
var_dump(array_is_list($array3)); // Retorna true