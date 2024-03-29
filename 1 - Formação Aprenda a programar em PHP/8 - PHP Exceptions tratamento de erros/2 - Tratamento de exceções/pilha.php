<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;

    try {
        funcao2();
    } catch (RuntimeException | DivisionByZeroError $e) {
        echo  $e->getMessage() . PHP_EOL;
        echo $e->getLine(). PHP_EOL;
        echo $e->getFile(). PHP_EOL;
        echo $e->getTraceAsString(). PHP_EOL;
    }
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    $divisao = intdiv(5, 0);

    $arrayFixo = new SplFixedArray(2);
    $arrayFixo[3] = 'Valor';

    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
