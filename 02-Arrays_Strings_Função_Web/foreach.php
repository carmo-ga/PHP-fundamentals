<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-15' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

// Adicionando items ao array associativo
$contasCorrentes[] = [ // -- O índice será 0
    'titular' => 'Claudia',
    'saldo' => 2000
];

foreach($contasCorrentes as $cpf => $conta) {
    echo "$cpf ";
    echo $conta['titular'] . PHP_EOL;
}