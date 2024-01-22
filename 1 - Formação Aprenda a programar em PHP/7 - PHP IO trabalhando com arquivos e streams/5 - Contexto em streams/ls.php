<?php

$diretorioAtual = die('.');

echo $diretorioAtual->path . PHP_EOL;

while($arquivo = $diretorioAtual->read()) {
  echo $arquivo. PHP_EOL;
}