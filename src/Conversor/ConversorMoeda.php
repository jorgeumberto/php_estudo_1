<?php

namespace App\Conversor;

use App\Enum\Moeda;
use App\Exception\ConversaoInvalidaException;
use App\Utils\FormatadorTrait;

readonly class ConversorMoeda
{
    use FormatadorTrait;

    public function converter(float $valor, Moeda $de, Moeda $para): string
    {
        $resultado = match([$de, $para]) {
            [Moeda::USD, Moeda::BRL] => $valor * 5.1,
            [Moeda::BRL, Moeda::USD] => $valor / 5.1,
            default => throw new ConversaoInvalidaException("Conversão de {$de->value} para {$para->value} não é suportada.")
        };

        return $this->formatarValor($resultado, $para->value);
    }
}
