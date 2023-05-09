<?php

$array = [
    1 => 'a',
    '1' => 'b', // -- Essa chave string é convertida para integer e sobrescreve o valor anterior
    1.5 => 'c', // -- Essa chave double é convertida para integer, ignorando tudo após a vírgula e e sobrescreve o valor anterior
    true => 'd' // -- Essa chave booleana é convertida para integer, com o valor 1, e sobrescreve o valor anterior. Se a chave fosse false, seria convertida para zero e não seria sobrescrita
];

foreach ($array as $item) {
    echo $item . PHP_EOL;
}