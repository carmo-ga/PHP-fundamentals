<?php

// $notas = [
//     10,
//     8,
//     9,
//     7,
//     6,
// ];

// rsort($notas);
// echo 'Ordenadas em ordem decrescente:';
// var_dump($notas);

$notas = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => '10',
    'Roberto' => 7,
    'Maria' => 9,
    'Pedro' => null,
];

arsort($notas); // -- Ordena e mantém as chaves
echo 'Ordenadas em ordem decrescente:';
var_dump($notas);


ksort($notas); // -- Ordena (considerando) as chaves
echo 'Ordenadas em ordem alfabética (crescente):';
var_dump($notas);

krsort($notas); // -- Ordena (considerando) as chaves
echo 'Ordenadas em ordem alfabética (decrescente):';
var_dump($notas);

// uksort(); // -- Ordena considerando as chaves

// ----- Checagem de tipo de dado
// if(gettype($notas) === 'array') {
//     echo 'Sim, é um array';
// }

// -- Ou
if(is_array($notas)) {
    echo 'Sim, é um array' . PHP_EOL;
}

// -- Retorna verdadeiro se o array for numérico (todas as chaves são números), começar em zero, for crescente e sequencial
var_dump(array_is_list($notas));

// Checar se uma chave existe no array
echo 'Vinicius fez a prova? ';
var_dump(array_key_exists('Vinicius', $notas)); // -- Retorna true

echo 'Pedro fez a prova? ';
var_dump(array_key_exists('Pedro', $notas)); // -- Retorna true, mas não é correto

// Verifica se a chave existe no array e se o valor não é nulo
echo 'Pedro fez a prova? ';
var_dump(isset($notas['Pedro'])); // -- Retorna false

// Verifica se o valor existe no array
echo 'Alguém tirou 10? ';
var_dump(in_array(10, $notas)); // -- Retorna true, pois a verificação é feito com ==

echo 'Alguém tirou 5? ';
var_dump(in_array(5, $notas)); // -- Retorna false

echo 'Alguém tirou 10? ';
var_dump(in_array(10, $notas, true)); // -- Retorna false, pois a verificação é feito com ===

// Retorna a chave correspondente ao valor
echo 'Quem tirou 10? ';
var_dump(array_search(10, $notas)); // -- Retorna true, pois a verificação é feito com ==