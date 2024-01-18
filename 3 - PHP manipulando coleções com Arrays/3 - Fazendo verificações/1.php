<?php

$notas = [ 'Ana' => 10, 'João' => 8, 'Maria' => 9, 'Roberto' => 7, 'Vinicius' => 6];

krsort($notas);

var_dump($notas);

if (is_array($notas)) {
  echo 'Sim, é um array' . PHP_EOL;
}


var_dump(array_is_list($notas));