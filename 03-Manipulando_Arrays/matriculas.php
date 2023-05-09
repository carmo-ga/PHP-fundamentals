<?php

$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria',
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
];

// Unir dois arrays - se houver chaves do tipo string repetidas, a mais recente sobrescreverá a anterior
// Porém, se houver chaves do tipo integer repetidas, não serão sobrescritas. Ocorrerá automaticamente uma incrementação
$alunos2022 = array_merge($alunos2021, $novosAlunos);
var_dump($alunos2022);

// Unir dois arrays por concatenação - Chaves repetidas não serão consideradas (nem sobrescritas nem adicionadas)
$alunos2023 = $alunos2021 + $novosAlunos;
var_dump($alunos2023);

// ------ Unpacking operator
$unpackingOperator = [...$alunos2021, 'Pedro', ...$novosAlunos];
var_dump($unpackingOperator);

// ------ Spread operator
spreadOperator(...[1, 2, 3]);

function spreadOperator(int $a, int $b, int $c)
{
}

// Adicionando elementos ao final do array
array_push($alunos2022, 'Alice', 'Bob', 'Charlie');
var_dump($alunos2022);

// Adicionando elementos no início do array
array_unshift($alunos2023, 'Letícia', 'Eduarda');
var_dump($alunos2023);

// Remove e retorna o primeiro elemento
echo array_shift($alunos2023) . PHP_EOL;

// Remove e retorna o primeiro elemento
echo array_pop($alunos2023) . PHP_EOL;

var_dump($alunos2023);