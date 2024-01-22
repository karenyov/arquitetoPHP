<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;

    try {
        funcao2();
    } catch (Throwable $e) {
        echo  $e->getMessage() . PHP_EOL;
        echo $e->getLine(). PHP_EOL;
        echo $e->getFile(). PHP_EOL;
        echo $e->getTraceAsString(). PHP_EOL;
        throw new RuntimeException("Exceção foi tratada, mas, pega aí", $e->getCode(), $e);
    }
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;
    throw new BadFunctionCallException('Essa é a mensagem de exceção');
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
