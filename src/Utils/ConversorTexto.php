<?php

namespace App\Utils;

class ConversorTexto
{
    public function paraMaiusculas(string|array $valor): string
    {
        if (is_array($valor)) {
            return strtoupper(implode(' ', $valor));
        }

        return strtoupper($valor);
    }
}
