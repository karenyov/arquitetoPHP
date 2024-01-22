<?php

$dados = [
  'nome' => 'Vinicius',
  'nota' => 10,
  'idae' => 24 
];


//
extract($dados);
var_dump($nome, $nota, $idade);

var_dump(compact('nome','nota','idade'));