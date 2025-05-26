<?php

namespace App\Conversor;

use App\Exception\ConversaoInvalidaException;

class ConversorSimples implements ConversorInterface
{
    public function converter(float $valor, string $de, string $para): float
    {
        return match([$de, $para]) {
            ['USD', 'BRL'] => $valor * 5.1,
            ['BRL', 'USD'] => $valor / 5.1,
            default => throw new ConversaoInvalidaException("Conversão de {$de} para {$para} não suportada."),
        };
    }
}
