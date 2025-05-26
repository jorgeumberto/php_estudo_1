<?php

namespace App\Exception;

use Exception;

class ConversaoInvalidaException extends Exception
{
    public function __construct(string $mensagem = "Conversão inválida.")
    {
        parent::__construct($mensagem);
    }
}
