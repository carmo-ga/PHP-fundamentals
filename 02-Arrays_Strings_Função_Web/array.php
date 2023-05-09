<?php

// -- Definição de array
// $arrayDeIdades = array(21, 23, 19, 25, 30, 41, 18);
$arrayDeIdades = [21, 23, 19, 25, 30, 41, 18];


// -- Definição de lista
// list($idadeVinicius, $idadeJoao, $idadeMaria) = $arrayDeIdades;
// list($idadeVinicius, , $idadeMaria) = $arrayDeIdades; // -- Ou
[$idadeVinicius, , $idadeMaria] = $arrayDeIdades;

$primeiraIdade = $arrayDeIdades[0];
$umaIdadeQualquer = $arrayDeIdades[4];

echo "Idade na primeira posição: $primeiraIdade" . PHP_EOL;
echo "Uma idade qualquer: $umaIdadeQualquer" . PHP_EOL;

// Adicionando um item ao array
// $arrayDeIdades[7] = 20; // -- Informando o índice manualmente
// $arrayDeIdades[count($arrayDeIdades)] = 20; // -- Informando o índice com o count()
$arrayDeIdades[] = 20; // -- Sem informar o índice, será inserida na última posição (após o maior valor existente)

foreach ($arrayDeIdades as $idade) {
    echo $idade . PHP_EOL;
}