<?php

// $dados = ['Vinicius', 10, 24];

// list($nome, $nota, $idade) = $dados; // -- Ou
// [$nome, $nota, $idade] = $dados;
// var_dump($nome, $nota, $idade);

$dados = [
    'nome' => 'Vinicius',
    'nota' => 10,
    'idade' => 24
];

['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;
var_dump($nome, $nota, $idade);

// Transforma todas as chaves de um array em variáveis
extract($dados);
var_dump($nome, $nota, $idade);

// Transforma variáveis em um array - o nome da variável será a chave do array e o valor é o valor da variável
var_dump(compact('nome', 'nota', 'idade'));