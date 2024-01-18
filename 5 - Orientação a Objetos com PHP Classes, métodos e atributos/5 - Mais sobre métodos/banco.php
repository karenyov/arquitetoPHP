<?php

require_once 'Conta.php';

$primeiraConta = new Conta('123.456.789-10', 'Maria T');
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok


echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

echo $primeiraConta->recuperaNumeroContas() . PHP_EOL;
