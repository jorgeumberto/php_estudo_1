<?php

namespace App\Attribute;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD)]
class LogarExecucao
{
    public function __construct(public string $mensagem = '')
    {}
}
