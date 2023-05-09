<?php

// ----- Utilização de wrapper para leitura de arquivo zip
// echo file_get_contents('zip://arquivos.zip#lista-cursos-php.txt');


// ----- Utilização de wrapper, com contexto, para leitura de arquivo zip com senha
$contexto = stream_context_create([
    'zip' => [
        'password' => '12345'
    ]
]);

echo file_get_contents('zip://senha-arquivo.zip#cursos-php.txt', false, $contexto);

// fopen('arquivo', 'modo', false, $contexto);