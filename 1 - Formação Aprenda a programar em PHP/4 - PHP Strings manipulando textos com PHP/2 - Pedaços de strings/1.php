<?php

$email = 'vinicius@alura.com.br';
$senha = '123';

echo $senha[0]. PHP_EOL;

echo strlen($senha) . PHP_EOL;

if (strlen($senha) < 8) {
  echo 'Senha insegura'. PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@', );

echo substr($email,0,$posicaoDoArroba) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

$usuario = substr($email, 0, $posicaoDoArroba);
echo $usuario . PHP_EOL;


echo mb_strtoupper($usuario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;