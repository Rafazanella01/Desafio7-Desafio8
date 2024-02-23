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

    public function testTipoInvalidoAmortizacao() 
    {
        $classe = new CalculadoraFinanceira();
        $this->expectException(Exception::class);
        $classe->calcularAmortizacao(10,4,2,"Inválido");
    }

    public function testNegativosAmortizacao() 
    {
        $classe = new CalculadoraFinanceira();
        $this->expectException(Exception::class);
        $classe->calcularAmortizacao(-10,-4,-2,"SAC");
    }

    public function testNaoNumericoAmortizacao() 
    {
        $classe = new CalculadoraFinanceira();
        $this->expectException(Exception::class);
        $classe->calcularAmortizacao('teste','teste','teste',"SAC");
    }

    public function testValoresNegativosJurosSimples()
    {
        $classe = new CalculadoraFinanceira();
        $this->expectException(Exception::class);
        $classe->calcularJurosSimples(-1000, -1, -7);
    }

    public function testValoresNegativosJurosCompostos()
    {
        $classe = new CalculadoraFinanceira();
        $this->expectException(Exception::class);
        $classe->calcularJurosCompostos(-234, -1, -2);
    }

    public function testCalcularAmortizacaoSAC()
    {
        $calculadora = new CalculadoraFinanceira();
        $resultado = $calculadora->calcularAmortizacao(10000, 10, 1, 'SAC');
        //var_dump($resultado);

        $this->assertCount(12, $resultado); // Verificar se há 12 parcelas

        // Verificar se o saldo devedor no final é zero
        $this->assertEquals(0, end($resultado)['saldoDevedor']);

        // Verificar se o valor da primeira parcela é correto
        $this->assertEquals(833.33, $resultado[0]['amortizacao']);
        $this->assertEquals(83.33, round($resultado[0]['juros'], 2)); 
        $this->assertEquals(9166.67, $resultado[0]['saldoDevedor']);

        // Verificar se o valor da última parcela é correto
        $this->assertEquals(833.33, round($resultado[11]['amortizacao'], 2)); 
        $this->assertEquals(6.94, round($resultado[11]['juros'], 2)); 
        $this->assertEquals(0, $resultado[11]['saldoDevedor']);
    }

    public function testCalcularAmortizacaoPrice()
    {
        $calculadora = new CalculadoraFinanceira();
        $resultado = $calculadora->calcularAmortizacao(10000, 10, 1, 'Price');
        //var_dump($resultado);

        $this->assertCount(12, $resultado); // Verificar se há 12 parcelas

        // Verificar se o saldo devedor no final é zero
        $this->assertEquals(0, end($resultado)['saldoDevedor']);

        // Verificar se o valor da primeira parcela é correto
        $this->assertEquals(795.83, round($resultado[0]['amortizacao'], 2)); 
        $this->assertEquals(83.33, round($resultado[0]['juros'], 2)); 
        $this->assertEquals(9204.17, $resultado[0]['saldoDevedor']);

        // Verificar se o valor da última parcela é correto
        $this->assertEquals(871.89, round($resultado[11]['amortizacao'], 2)); 
        $this->assertEquals(7.27, round($resultado[11]['juros'], 2)); 
        $this->assertEquals(0, $resultado[11]['saldoDevedor']);
    }
}
?>
