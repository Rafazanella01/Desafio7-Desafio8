<?php

use App\Models\CalculadoraFinanceira;
use PHPUnit\Framework\TestCase;

class CalculadoraFinanceiraTest extends TestCase
{
    public function testCalcularJurosSimples()
    {
        $classe = new CalculadoraFinanceira();
        $this->assertEquals(4200, $classe->calcularJurosSimples(10000, 12, 3.5));
    }

    public function testCalcularJurosCompostos()
    {
        $classe = new CalculadoraFinanceira();
        $this->assertEquals(285.21, round($classe->calcularJurosCompostos(667.83, 7.86, 4.7), 2));
    }

    /*
    public function testCalcularAmortizacaoSAC()
    {
        
    }
    
    public function testCalcularAmortizacaoPrice()
    {
        
    }
    */
}
?>
