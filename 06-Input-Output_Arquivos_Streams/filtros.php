<?php

require_once 'MeuFiltro.php';

$arquivoCursos = fopen('lista-cursos-php.txt', 'r');

// ----- Aplica filtro ao arquivo
// stream_filter_append($arquivoCursos, 'string.toupper');

// ----- Aplica filtro personalizado ao arquivo
stream_filter_register('alura.filtro', MeuFiltro::class);
stream_filter_append($arquivoCursos, 'alura.filtro');

echo fread($arquivoCursos, filesize('lista-cursos-php.txt'));

fclose($arquivoCursos); 