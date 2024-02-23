<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

class CalculadoraFinanceira extends Model
{
    use HasFactory;

    public function __construct()
    {
        
    }

    public function calcularJurosSimples($capital, $taxa, $tempo)
    {
        if($capital < 0 || $taxa < 0 || $tempo < 0||!is_numeric($capital)||!is_numeric($taxa)||!is_numeric($tempo)){
            throw new Exception("Os valores não podem ser menores que zero e todos precisam ser numéricos!");
        } else{
            $jurosSimples = ($capital * ($taxa/100) * $tempo);
            return $jurosSimples;
        }
    }

    public function calcularJurosCompostos($capital, $taxa, $tempo)
    {
        if($capital < 0 || $taxa < 0 || $tempo < 0||!is_numeric($capital)||!is_numeric($taxa)||!is_numeric($tempo)){
            throw new Exception("Os valores não podem ser menores que zero e todos precisam ser numéricos!");
        }else{
            $montante = $capital * pow(1 + $taxa / 100, $tempo);
            $jurosCompostos = $montante - $capital;
            return $jurosCompostos;
        }
    }

    public function calcularAmortizacao($capital, $taxa, $tempo, $tipo)
    {
        if ($capital < 0 || $taxa < 0 || $tempo < 0 || !is_numeric($capital) || !is_numeric($taxa) || !is_numeric($tempo)) {
            throw new Exception("Os valores não podem ser menores que zero e todos precisam ser numéricos");
        }
        $taxaMensal = $taxa / 12 / 100;

        $saldoDevedor = $capital;
        $dados = [];


        for($i = 0; $i < $tempo * 12; $i++){
            if($tipo === 'SAC'){
                $amortizacao = $capital / ($tempo * 12);

                $juros = $saldoDevedor * $taxaMensal;
            }else if($tipo === 'Price'){
                $parcelaFixa = $capital * ($taxaMensal * pow(1 + $taxaMensal, $tempo * 12)) / (pow(1 + $taxaMensal, $tempo * 12) - 1);
                $juros = $saldoDevedor * $taxaMensal;

                $amortizacao = $parcelaFixa - $juros;

            } else{
                throw new Exception("O tipo precisa ser SAC ou Price!");
            }
            $saldoDevedor -= $amortizacao;

            $valorParcela = $amortizacao + $juros;

            $dados[] = [
                'parcela' => round($valorParcela, 2),
                'amortizacao' => round($amortizacao, 2),
                'juros' => round($juros, 2),
                'saldoDevedor' => round($saldoDevedor, 2)
            ];
        }
    
        return $dados;
    }
} 

      /*  if ($tipo === 'SAC') {
            $amortizacao = $capital / ($tempo * 12);
            for ($i = 0; $i < $tempo * 12; $i++) {
                $juros = $saldoDevedor * $taxaMensal;
                $saldoDevedor -= $amortizacao;

                $dados[] = [
                    'total' => round($amortizacao + $juros, 2),
                    'juros' => round($juros, 2),
                    'amortizacao' => round($amortizacao, 2),
                    'saldoDevedor' => round($saldoDevedor, 2)
                ];
            }
        } else if ($tipo === 'Price') {
            for ($i = 0; $i < $tempo * 12; $i++) {
                $valorParcela = ($capital) * ((pow(1 + $taxaMensal, $tempo * 12) * $taxaMensal) / ((pow(1 + $taxaMensal, $tempo * 12) - 1)));
                $juros = $saldoDevedor * $taxaMensal;
                $amortizacao = $valorParcela - $juros;
                $saldoDevedor -= $amortizacao;

                $dados[] = [
                    'valorParcela' => round($valorParcela, 2),
                    'juros' => round($juros, 2),
                    'amortizacao' => round($amortizacao, 2),
                    'saldoDevedor' => round($saldoDevedor, 2)
                ];
            }
        } else {
            throw new \Exception("O tipo deve ser SAC ou Price");
        }

        return $dados;
    }
}
*/


