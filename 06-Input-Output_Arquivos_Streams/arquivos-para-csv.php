<?php

$meusCursos = file('lista-cursos-php.txt');
$outrosCursos = file('cursos-php.txt');

$arquivoCsv = fopen('cursos.csv', 'w');

foreach ($meusCursos as $curso) {
    $linha = [trim(mb_convert_encoding($curso, "Windows-1252", "UTF-8")), mb_convert_encoding("Sim", "Windows-1252", "UTF-8")];

    fputcsv($arquivoCsv, $linha, ";");
}

foreach ($outrosCursos as $curso) {
    $linha = [trim(mb_convert_encoding($curso, "Windows-1252", "UTF-8")), mb_convert_encoding("Não", "Windows-1252", "UTF-8")];

    fputcsv($arquivoCsv, $linha, ";");
}

fclose($arquivoCsv);