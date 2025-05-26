<?php

namespace App\Utils;

class Formatador
{
    public static function paraReais(float $valor): string
    {
        return 'R$ ' . number_format($valor, 2, ',', '.');
    }

    public static function paraDolares(float $valor): string
    {
        return 'US$ ' . number_format($valor, 2, '.', ',');
    }
}
