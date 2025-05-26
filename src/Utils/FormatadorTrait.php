<?php

namespace App\Utils;

trait FormatadorTrait
{
    public function formatarValor(float $valor, string $moeda): string
    {
        return match($moeda) {
            'BRL' => 'R$ ' . number_format($valor, 2, ',', '.'),
            'USD' => '$ ' . number_format($valor, 2, '.', ','),
            default => number_format($valor, 2)
        };
    }
}
