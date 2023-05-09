<?php

print 'Print: Olá, mundo!' . PHP_EOL;

// ----- Escrevendo na tela com wrapper php://
$tela = fopen('php://stdout', 'w');
fwrite($tela, 'Olá, mundo!' . PHP_EOL); // -- Ou
fwrite(STDOUT, 'Olá, mundo!' . PHP_EOL);

// ----- Escrevendo na tela utilizando saída de erro
$tela = fopen('php://stderr', 'w');
fwrite($tela, 'Esse é um erro!' . PHP_EOL); // -- Ou
fwrite(STDERR, 'Esse é um erro!' . PHP_EOL);

// ----- Transferindo conteúdo de um stream para outro
$cursos = fopen('zip://arquivos.zip#cursos-php.txt', 'r');
stream_copy_to_stream($cursos, STDOUT);