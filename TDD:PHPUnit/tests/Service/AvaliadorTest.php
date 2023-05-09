<?php

namespace Alura\Leilao\Tests\Service;

use Alura\Leilao\Model\{Lance, Leilao, Usuario};
use Alura\Leilao\Service\Avaliador;
use DomainException;
use PHPUnit\Framework\TestCase;

class AvaliadorTest extends TestCase
{
    private Avaliador $leiloeiro;

    // --- Esse método será executado antes de cada teste
    public function setUp(): void
    {
        $this->leiloeiro = new Avaliador();
    }

    /**
     * @dataProvider leilaoEmOrdemCrescente
     * @dataProvider leilaoEmOrdemDecrescente
     * @dataProvider leilaoEmOrdemAleatoria
     */
    public function testAvaliadorDeveEncontrarOMaiorValorDeLancesEmOrdemCrescente(Leilao $leilao)
    {
        // Arrange - Given

        // Act - When
        $this->leiloeiro->avalia($leilao);

        $maiorValor = $this->leiloeiro->getMaiorValor();

        // Assert - Then
        // $this->assertEquals(2500, $maiorValor); // Ou
        self::assertEquals(2500, $maiorValor);
    }

    /**
     * @dataProvider leilaoEmOrdemCrescente
     * @dataProvider leilaoEmOrdemDecrescente
     * @dataProvider leilaoEmOrdemAleatoria
     */
    public function testAvaliadorDeveEncontrarOMaiorValorDeLancesEmOrdemDecrescente(Leilao $leilao)
    {
        // Arrange - Given

        // Act - When
        $this->leiloeiro->avalia($leilao);

        $maiorValor = $this->leiloeiro->getMaiorValor();

        // Assert - Then
        self::assertEquals(2500, $maiorValor);
    }

    /**
     * @dataProvider leilaoEmOrdemCrescente
     * @dataProvider leilaoEmOrdemDecrescente
     * @dataProvider leilaoEmOrdemAleatoria
     */
    public function testAvaliadorDeveEncontrarOMenorValorDeLancesEmOrdemDecrescente(Leilao $leilao)
    {
        // Arrange - Given

        // Act - When
        $this->leiloeiro->avalia($leilao);

        $menorValor = $this->leiloeiro->getMenorValor();

        // Assert - Then
        self::assertEquals(1700, $menorValor);
    }

    /**
     * @dataProvider leilaoEmOrdemCrescente
     * @dataProvider leilaoEmOrdemDecrescente
     * @dataProvider leilaoEmOrdemAleatoria
     */
    public function testAvaliadorDeveEncontrarOMenorValorDeLancesEmOrdemCrescente(Leilao $leilao)
    {
        // Arrange - Given

        // Act - When
        $this->leiloeiro->avalia($leilao);

        $menorValor = $this->leiloeiro->getMenorValor();

        // Assert - Then
        self::assertEquals(1700, $menorValor);
    }

    /**
     * @dataProvider leilaoEmOrdemCrescente
     * @dataProvider leilaoEmOrdemDecrescente
     * @dataProvider leilaoEmOrdemAleatoria
     */
    public function testAvaliadorDeveBuscarOsTresMaioresLances(Leilao $leilao)
    {
        // Arrange - Given

        // Act - When
        $this->leiloeiro->avalia($leilao);

        $maioresLances = $this->leiloeiro->getMaioresLances();

        // Assert - Then
        static::assertCount(3, $maioresLances);
        static::assertEquals(2500, $maioresLances[0]->getValor());
        static::assertEquals(2000, $maioresLances[1]->getValor());
        static::assertEquals(1700, $maioresLances[2]->getValor());
    }

    public function testLeilaoVazioNaoPodeSerAvaliado()
    {
        // try {
        //     $leilao = new Leilao('Fusca Azul');
        //     $this->leiloeiro->avalia($leilao);

        //     static::fail('Exceção deveria ter sido lançada');
        // } catch (\DomainException $exception) {
        //     static::assertEquals('Não é possível avaliar leilão vazio', $exception->getMessage());
        // }

        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('Não é possível avaliar leilão vazio');

        $leilao = new Leilao('Fusca Azul');
        $this->leiloeiro->avalia($leilao);
    }

    public function testLeilaoFinalizadoNaoPodeSerAvaliado()
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('Leilão já finalizado');

        $leilao = new Leilao('Fiat 17 0KM');
        $leilao->recebeLance(new Lance(new Usuario('Fabio'), 2000));
        $leilao->finaliza();

        $this->leiloeiro->avalia($leilao);
    }

    public static function leilaoEmOrdemCrescente()
    {
        $leilao = new Leilao('Fiat 147 0KM');

        $ana = new Usuario('Ana');
        $joao = new Usuario('João');
        $maria = new Usuario('Maria');

        $leilao->recebeLance(new Lance($ana, 1700));
        $leilao->recebeLance(new Lance($joao, 2000));
        $leilao->recebeLance(new Lance($maria, 2500));

        return [
            'ordemCrescente' => [$leilao]
        ];
    }

    public static function leilaoEmOrdemDecrescente()
    {
        $leilao = new Leilao('Fiat 147 0KM');

        $maria = new Usuario('Maria');
        $joao = new Usuario('João');
        $ana = new Usuario('Ana');

        $leilao->recebeLance(new Lance($maria, 2500));
        $leilao->recebeLance(new Lance($joao, 2000));
        $leilao->recebeLance(new Lance($ana, 1700));

        return [
            'ordemDecrescente' => [$leilao]
        ];
    }

    public static function leilaoEmOrdemAleatoria()
    {
        $leilao = new Leilao('Fiat 147 0KM');

        $joao = new Usuario('João');
        $maria = new Usuario('Maria');
        $ana = new Usuario('Ana');

        $leilao->recebeLance(new Lance($joao, 2000));
        $leilao->recebeLance(new Lance($maria, 2500));
        $leilao->recebeLance(new Lance($ana, 1700));

        return [
            'ordemAleatoria' => [$leilao]
        ];
    }

    // public function entregaLeiloes()
    // {
    //     return [
    //         [$this->leilaoEmOrdemCrescente()],
    //         [$this->leilaoEmOrdemDecrescente()],
    //         [$this->leilaoEmOrdemAleatoria()],
    //     ];
    // }
}