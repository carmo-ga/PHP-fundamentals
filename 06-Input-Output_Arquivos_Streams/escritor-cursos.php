<?php

// ----- O w inicializa o modo escrita com insert, ou seja, sobrescreve o que já existe (começa a escrita no início do arquivo). Se o arquivo não existir, será criado.
// $arquivo = fopen('cursos-php.txt', 'w');

$curso = "\nCurso Design Patterns em PHP: padrões criacionais III";

// ----- Escreve em um arquivo
// fwrite($arquivo, $curso);
// fclose($arquivo);

// ----- O a (append) inicializa o modo escrita, colocando o ponteiro no final do arquivo. Se o arquivo não existir, será criado.
// $arquivo = fopen('cursos-php.txt', 'a');

// $curso = "\nCurso Design Patterns em PHP: padrões criacionais II";

// fwrite($arquivo, $curso);
// fclose($arquivo);

// ----- Escreve dados em um arquivo. Se o arquivo filename existir, acrescenta os dados no arquivo ao invés de sobrescrevê-lo.
file_put_contents('cursos-php.txt', $curso, FILE_APPEND);