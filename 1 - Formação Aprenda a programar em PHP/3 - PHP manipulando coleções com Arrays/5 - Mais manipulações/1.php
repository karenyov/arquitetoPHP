<?php

$alunos2021 = [ 'Ana' , 'João', 'Maria' , 'Roberto' , 'Vinicius'];

$novosAlunos = ['Patricia','Nico','Kilderson','Daiane'];

$alunos2022 = [...$alunos2021, 'Carlos Vinicius', ...$novosAlunos];

array_push($alunos2022, 'Alice', 'Bob', 'Charlie');

$alunos2022[] = 'Luiz';

echo array_unshift($alunos2022,'Stephane', 'Rafaela') . PHP_EOL;

echo array_pop($alunos2022) . PHP_EOL;

var_dump($alunos2022);

