<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculadoraFinanceira extends Model
{
    use HasFactory;

    public function calcularJurosSimples($capital, $taxa, $tempo)
    {
        $jurosSimples = $capital * $taxa * $tempo;

        return $jurosSimples;
    }

    public function calcularJurosCompostos($capital, $taxa, $tempo)
    {
        $jurosCompostos = $capital * pow((1 + $taxa), $tempo);

        return $jurosCompostos;
    }

    public function calcularAmortizacao($capital, $taxa, $tempo, $tipo)
    {

    }
}
