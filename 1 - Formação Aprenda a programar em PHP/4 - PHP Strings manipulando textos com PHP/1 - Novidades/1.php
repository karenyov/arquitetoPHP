<?php

$nome = 'Vinicius Dias';


$ehDaminhaFamilia = str_contains($nome,'Dias');

if ($ehDaminhaFamilia) {
  echo "$nome é da minha família" . PHP_EOL;
} else {
  echo  "$nome não é da minha família". PHP_EOL;
}