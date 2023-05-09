<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    // --- Sem o try..catch gera EXCEÇÃO: Uncaught RuntimeException: Index invalid or out of range
    // try {
    //     $arrayFixo = new SplFixedArray(2);
    //     $arrayFixo[3] = 'Valor';
    // } catch(RuntimeException $erro) {
    //     echo 'Aconteceu um erro na função 1' . PHP_EOL;
    // }
    
    // --- Gera ERRO: Uncaught DivisionByZeroError: Division by zero
    // $divisao = intdiv(5, 0);

    // try {
    //     funcao2();
    // } catch(RuntimeException $erro) {
    //     echo 'Na função 1, eu resolvi um erro da função 2' . PHP_EOL;
    // } catch(DivisionByZeroError $erro) {
    //     echo 'Erro de divisão por zero' . PHP_EOL;
    // }
    // --- Ou: abordagem multi-catch
    try {
        funcao2();
    // } catch(RuntimeException | DivisionByZeroError $erro) { // -- Especificando o tipo de exceção
    // } catch(Exception $excecao) { // -- Pegando exceções
    // } catch(Error $excecao) { // -- Pegando erros
    // } catch(Exception | Error $excecao) { // -- Pegando exceções e erros
    } catch(Throwable $excecao) { // -- Pegando todas as exceções e erros (é genérico)
        echo $excecao->getMessage() . PHP_EOL;
        echo $excecao->getLine() . PHP_EOL;
        echo $excecao->getFile() . PHP_EOL;
        // echo $excecao->getTraceAsString() . PHP_EOL;
        echo 'Na função 1, eu resolvi uma exceção da função 2' . PHP_EOL;
        
        // throw new RuntimeException('Exceção foi tratada e lançada', 1, $erro);
    }

    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    $divisao = intdiv(5, 0);

    // $arrayFixo = new SplFixedArray(2);
    // $arrayFixo[3] = 'Valor';

    for ($i = 1; $i <= 5; $i++) { 
        echo $i . PHP_EOL;
    }
    // --- Gera o backtrace - o rastreamento da pilha
    // var_dump(debug_backtrace());

    $exception = new BadFunctionCallException('Essa é a mensagem da exceção');
    throw $exception;

    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;