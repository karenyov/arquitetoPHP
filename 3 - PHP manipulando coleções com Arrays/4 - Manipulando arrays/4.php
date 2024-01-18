<?php

$alunos2021 = [ 'Ana' , 'João', 'Maria' , 'Roberto' , 'Vinicius'];

$novosAlunos = ['Patricia','Nico','Kilderson','Daiane'];


//  desempacota array
$alunos2022 = [...$alunos2021, ...$novosAlunos];


var_dump($alunos2022);


funcao(1,2,3,4,5,6,7,8,9,10);
function funcao(int ...$alunos) {

}
