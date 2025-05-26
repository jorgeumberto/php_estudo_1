<?php

namespace App\DTO;

readonly class OperacaoMoedaDTO
{
    public function __construct(
        public float $valor,
        public string $moedaOrigem,
        public string $moedaDestino
    ) {}
}
