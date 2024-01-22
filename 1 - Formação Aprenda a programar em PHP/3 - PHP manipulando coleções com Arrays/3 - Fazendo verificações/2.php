<?php

$notas = [ 'Ana' => 10, 'João' => 8, 'Maria' => 9, 'Roberto' => 7, 'Vinicius' => null];

krsort($notas);

var_dump($notas);

if (is_array($notas)) {
  echo 'Sim, é um array' . PHP_EOL;
}

echo 'Vinicius fez a prova: ' . PHP_EOL;
var_dump(array_key_exists('Vinicius', $notas));


var_dump(isset($notas['Vinicius']));