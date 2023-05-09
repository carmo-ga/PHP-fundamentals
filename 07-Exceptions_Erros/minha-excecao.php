<?php

/**
 * @throws Exception
 */
class MinhaExcecao extends DomainException
{
    public function exibeMensagem()
    {
        echo 'Uma mensagem';
    }
}

try {
    throw new MinhaExcecao();
} catch (MinhaExcecao $e) {
    $e->exibeMensagem();
}