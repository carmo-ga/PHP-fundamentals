<?php

// -- Incluir arquivos externo
// include('funcoes.php');
// include 'funcoes.php'; // -- Se o arquivo não for encontrado, será lançado um warning e a execução continuará com erros posteriores

require 'funcoes.php'; // -- Se o arquivo não for encontrado, haverá um erro e a execução não continuará

// -- Verifica se o arquivo já foi incluido anteriormente, caso já tenha sido incluido, não será lançado nenhum erro
require_once 'funcoes.php';


$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.456.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ],
];

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 200);

$contasCorrentes['123.456.789-12'] = depositar($contasCorrentes['123.456.789-12'], 900);

titularComLetrasMaiusculas($contasCorrentes['123.456.789-12']);

// Removendo um item da lista - remove a variável da memória
unset($contasCorrentes['123.456.789-11']);

// -------- Concatenação de strings
// foreach($contasCorrentes as $cpf => $conta) {
//     exibeMensagem('CPF: ' . $cpf . ' Titular: ' . $conta['titular'] . ' Saldo: R$ ' . $conta['saldo']);
// }

// -------- Interpolação de strings
// -- Array sem aspas no índice
// foreach($contasCorrentes as $cpf => $conta) {
//     exibeMensagem("CPF: $cpf Titular: $conta[titular] Saldo: R$ $conta[saldo]");
// }

// String complexa
// foreach($contasCorrentes as $cpf => $conta) {
//     exibeMensagem("CPF: $cpf Titular: {$conta['titular']} Saldo: R$ {$conta['saldo']}");
// }

// Trabalhando com lista
// foreach($contasCorrentes as $cpf => $conta) {
//     // list($titular, $saldo) = $conta; // -- Será lançado o warning "Undefined array key 0 and 1", pois o índice é indefinido

//     // list('titular' => $titular, 'saldo' => $saldo) = $conta; // -- Ou
//     ['titular' => $titular, 'saldo' => $saldo] = $conta;

//     exibeMensagem("CPF: $cpf Titular: {$conta['titular']} Saldo: R$ {$conta['saldo']}");
// }

// Formatando exibição em HTML
// echo "<ul>";
// foreach($contasCorrentes as $cpf => $conta) {
//     exibeConta($conta);
// }
// echo "</ul>";

// -- Encerra instruções em PHP
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach ($contasConrrentes as $cpf => $conta) { ?>
            <dt>
                <h3><?php echo "Titular: {$conta['titular']}"; ?> <?php echo $cpf; ?></h3>
            </dt>
            <dd>
                <?php "Saldo: {$conta['saldo']}"; ?>
            </dd>
        <?php } ?>
    </dl>
</body>
</html>