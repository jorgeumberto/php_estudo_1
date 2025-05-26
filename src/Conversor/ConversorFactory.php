<?php

namespace App\Conversor;

class ConversorFactory
{
    public static function criar(string $tipo): ConversorInterface
    {
        return match($tipo) {
            'simples' => new ConversorSimples(),
            default => throw new \InvalidArgumentException("Tipo de conversor {$tipo} não suportado."),
        };
    }
}
