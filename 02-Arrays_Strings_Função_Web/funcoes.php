<?php

function exibeMensagem(string $mensagem) : void
{
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorASacar) : array
{
    if($valorASacar > $conta['saldo']) {
        exibeMensagem('Você não pode sacar');
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function depositar(array $conta, float $valorADepositar) : array
{
    if($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depósitos precisam ser positivos");
    }
    return $conta;
}

// -- Passagem por referência - altera o valor de referência na memória (altera o "valor" real da variável)
function titularComLetrasMaiusculas(array &$conta) : void
{
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta(array $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;

    echo "<li>Titular: $titular. Saldo: {$saldo}</li>";
}