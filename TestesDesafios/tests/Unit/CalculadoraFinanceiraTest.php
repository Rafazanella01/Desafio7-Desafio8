<?php

use App\Models\CalculadoraFinanceira;
use PHPUnit\Framework\TestCase;

class CalculadoraFinanceiraTest extends TestCase
{
    public function testCalcularJurosSimples()
    {
        $classe = new CalculadoraFinanceira();
        $this->assertEquals(5640, $classe->calcularJurosSimples(10000, 12, 4.7));
    }

    public function testCalcularJurosSimplesException()
    {
        $classe = new CalculadoraFinanceira();
        $this->expectException(Exception::class);
        $classe->calcularJurosSimples("abc", 1, 2);
    }

    public function testCalcularJurosCompostos()
    {
        $classe = new CalculadoraFinanceira();
        $this->assertEquals(500, round($classe->calcularJurosCompostos(5000, 10, 1), 2));
    }

    public function testCalcularJurosCompostosException()
    {
        $classe = new CalculadoraFinanceira();
        $this->expectException(Exception::class);
        $classe->calcularJurosCompostos("abc", 1, 2);
    }

    public function testTipoInvalido() {
        $classe = new CalculadoraFinanceira();
        $this->expectException(Exception::class);
        $classe->calcularAmortizacao(10,4,2,"Inválido");
    }

    public function testCalcularAmortizacaoSAC() {
       
    }

    public function testCalcularAmortizacaoPrice() {
       
    }
}
?>
