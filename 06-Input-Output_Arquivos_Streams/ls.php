<?php

// ----- Listando os arquivos do diretório atual
$diretorioAtual = dir('.');

echo "Diretório atual: $diretorioAtual->path" . PHP_EOL;

while ($arquivo = $diretorioAtual->read()) {
    echo $arquivo . PHP_EOL;
}