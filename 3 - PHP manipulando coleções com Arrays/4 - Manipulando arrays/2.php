<?php

$notasBimestre1 = [ 'Ana' => 10, 'João' => 8, 'Maria' => 9, 'Roberto' => 7, 'Vinicius' => 6];

$notasBimestre2 = [ 'Ana' => 2, 'João' => 8, 'Maria' => 10, 'Roberto' => 7];

$alunosFaltantes = array_diff($notasBimestre1, $notasBimestre2);
$nomeAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomeAlunos));

var_dump(array_flip($alunosFaltantes));


