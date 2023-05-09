<?php

$arquivo = fopen('lista-cursos-php.txt', 'r');

// ----- Leitura de arquivo linha a linha
while(!feof($arquivo)) {
    $curso = fgets($arquivo);

    // echo $curso;
}

// fclose($arquivo);

// ----- Leitura integral de arquivo
// ----- Cuidado com arquivos grandes, pois será todo carregado na memória
$tamanhoDoArquivo = filesize('lista-cursos-php.txt');
$cursos = fread($arquivo, $tamanhoDoArquivo);
// echo $cursos;

fclose($arquivo);

// ----- Lê todo o conteúdo de um arquivo para uma string
$cursos = file_get_contents('lista-cursos-php.txt');
// echo $cursos;

// ----- Lê todo o arquivo para um array
$cursos = file('lista-cursos-php.txt');
var_dump($cursos);