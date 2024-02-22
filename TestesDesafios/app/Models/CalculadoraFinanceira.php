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
        if(!is_numeric($capital)||!is_numeric($taxa)||!is_numeric($tempo)){
            throw new Exception("Todos os valores precisam ser numéricos");
        } else{
            $jurosSimples = ($capital * ($taxa/100) * $tempo);
            return $jurosSimples;
        }
    }

    public function calcularJurosCompostos($capital, $taxa, $tempo)
    {
        if(!is_numeric($capital)||!is_numeric($taxa)||!is_numeric($tempo)){
            
            throw new Exception("Todos os valores precisam ser numéricos");
        }else{
            $montante = $capital * pow(1 + $taxa / 100, $tempo);
            $jurosCompostos = $montante - $capital;
            return $jurosCompostos;
        }
    }

    function calcularAmortizacao($capital, $taxa, $tempo, $tipo) { 
        
        if ($tipo == 'SAC') {
            $amortizacao = $capital / $tempo;

            

        } elseif ($tipo == 'Price') {
           

        } else {
            throw new Exception("Amortização inválida");
        }
    
        

    }
}


