<?php

$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimestre2 = [
    'Vinicius' => 7,
    'João' => 8,
    'Ana' => 10,
    'Maria' => 9,
];

// Retorna um novo array com os elementos do primeiro parâmetro, cujos valores não estejam nos demais parâmetros (as chaves não são consideradas)
var_dump(array_diff($notasBimestre1, $notasBimestre2)); // -- Será retornado o Vinicius, pois no Bimestre1 o Roberto tem nota 7 e no Bimestre2 o Vinicius tem nota 7, então o Roberto não será considerado (já que a comparação é feita com valores).

// Retorna um novo array com os elementos do primeiro parâmetro, cujas chaves não estejam nos demais parâmetros
var_dump(array_diff_key($notasBimestre1, $notasBimestre2)); // -- Será retornado o Roberto

// Retorna um novo array com os elementos do primeiro parâmetro, cujas chaves e os valores não estejam nos demais parâmetros
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2)); // -- Será retornado o Vinicius e Roberto

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

// Recebe um array e retorna um novo array somente com as chaves
var_dump(array_keys($alunosFaltantes));

// Recebe um array e retorna um novo array somente com os valores
var_dump(array_values($alunosFaltantes));

// Combina arrays
var_dump(array_combine($notasAlunos, $nomesAlunos));
// var_dump(array_combine($notasAlunos, $notasBimestre1)); // Arrays de tamanho diferentes gera erro

// Inverte chave/valores do array
var_dump(array_flip($alunosFaltantes));

