<?php

require_once '2.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

$contasCorrentes['123.256.789-12'] = depositar(
  $contasCorrentes['123.256.789-12'],
  900
);


$contasCorrentes['123.456.789-10'] = sacar(
  $contasCorrentes['123.456.789-10'],
  500
);

$contasCorrentes['123.456.789-11'] = sacar(
  $contasCorrentes['123.456.789-11'], 
  200
);

unset($contasCorrentes['123.456.689-11']);

titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);

foreach ($contasCorrentes as $cpf => $conta) {
  ['titular' => $titular, 'saldo' => $saldo] = $conta;
  exibeMensagem(
      "$cpf $titular  $saldo"
  );
}
