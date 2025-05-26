<?php

require __DIR__ . '/vendor/autoload.php';

use App\Conversor\ConversorFactory;
use App\Exception\ConversaoInvalidaException;
use App\Utils\FormatadorTrait;

class Aplicacao
{
    use FormatadorTrait;

    public function executar(): void
    {
        try {
            $conversor = ConversorFactory::criar('simples');

            $valorConvertido = $conversor->converter(100, 'USD', 'BRL'); // Força erro

            echo $this->formatarValor($valorConvertido, 'BRL') . PHP_EOL;
        } catch (ConversaoInvalidaException $e) {
            echo "Erro de conversão: " . $e->getMessage() . PHP_EOL;
        } catch (\Throwable $e) {
            echo "Erro inesperado: " . $e->getMessage() . PHP_EOL;
        }
    }
}

$app = new Aplicacao();
$app->executar();
