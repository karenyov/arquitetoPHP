<?php

$conta1 = [
  "titular" => "Maria", 
  "saldo" => 1000
];

$conta2 = [
  "titular" => "José", 
  "saldo" => 1000
];

$conta3 = [
  "titular" => "Rooberto", 
  "saldo" => 300
];

$contas = [$conta1, $contas2, $conta3];

for($i=0; $i < count($contas); $i++) {
  echo $contas[$i]["titular"] .PHP_EOL ;
}

