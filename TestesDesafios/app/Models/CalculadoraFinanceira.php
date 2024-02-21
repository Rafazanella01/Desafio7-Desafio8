<?php

namespace App\Models;

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
        $jurosSimples = ($capital * $taxa * $tempo) / 100;

        return $jurosSimples;
    }

    public function calcularJurosCompostos($capital, $taxa, $tempo)
    {
            $montante = $capital * pow(1 + $taxa / 100, $tempo);
            $jurosCompostos = $montante - $capital;

            return $jurosCompostos;
    }

    public function calcularAmortizacao($capital, $taxa, $tempo, $tipo) 
    {
       
    }
}
