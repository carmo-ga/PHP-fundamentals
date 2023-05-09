<?php

// $notas = [
//     10,
//     8,
//     9,
//     7,
// ];

// $notasOrdenadas = $notas;
// sort($notasOrdenadas); // -- Ordenação por referência

// echo 'Desordenadas:';
// var_dump($notas);

// echo 'Ordenadas em ordem crescente:';
// var_dump($notasOrdenadas);

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
];

function ordenaNotasDecrescente(array $nota1, array $nota2) : int
{
    // if($nota1['nota'] > $nota2['nota']) {
    //     return -1;
    // }

    // if($nota2['nota'] > $nota1['nota']) {
    //     return 1;
    // }

    // return 0;

    // Utilizando operador de espaçonave
    return $nota2['nota'] <=> $nota1['nota'];
}

usort($notas, 'ordenaNotasDecrescente');
var_dump($notas);