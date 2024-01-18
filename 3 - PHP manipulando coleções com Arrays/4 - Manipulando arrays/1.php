<?php

$notasBimestre1 = [ 'Ana' => 10, 'João' => 8, 'Maria' => 9, 'Roberto' => 7, 'Vinicius' => 6];

$notasBimestre2 = [ 'Ana' => 2, 'João' => 8, 'Maria' => 10, 'Roberto' => 7];

var_dump(array_diff($notasBimestre1, $notasBimestre2));

var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));


