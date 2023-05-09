<?php

// ----- A classe SplFileObject oferece uma interface orientada a objetos para manipulação de arquivos (ou streams em geral)
$arquivoCursos = new SplFileObject('cursos.csv');

while($arquivoCursos->eof() === false) {
    $linha = $arquivoCursos->fgetcsv(";");

    echo mb_convert_encoding($linha[1], "UTF-8", "Windows-1252") . ' - ' .
    mb_convert_encoding($linha[0], "UTF-8", "Windows-1252") . PHP_EOL;
}

// ----- Data de criação do arquivo
echo $arquivoCursos->getCTime() . PHP_EOL;

$date = new DateTime();
$date->setTimestamp($arquivoCursos->getCTime());

echo $date->format('d/m/Y') . PHP_EOL;