<?php

$dia_semana = (int) readline("Digite o número do dia da semana (1 a 7): ");

switch ($dia_semana) {
    case 1:
        $mensagem = "Domingo - Fim de semana";
        break;
    case 2:
        $mensagem = "Segunda-feira - Dia útil";
        break;
    case 3:
        $mensagem = "Terça-feira - Dia útil";
        break;
    case 4:
        $mensagem = "Quarta-feira - Dia útil";
        break;
    case 5:
        $mensagem = "Quinta-feira - Dia útil";
        break;
    case 6:
        $mensagem = "Sexta-feira - Dia útil";
        break;
    case 7:
        $mensagem = "Sábado - Fim de semana";
        break;
    default:
        $mensagem = "Dia inválido";
        break;
}

echo $mensagem . PHP_EOL;
1