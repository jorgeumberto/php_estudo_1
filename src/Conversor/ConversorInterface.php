<?php

namespace App\Conversor;

interface ConversorInterface
{
    public function converter(float $valor, string $de, string $para): float;
}
