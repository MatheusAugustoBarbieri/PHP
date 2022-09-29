<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);

$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'],
    200
);

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
    900
);
// remove um item do array
unset($contasCorrentes['123.456.689-11']);

titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);

foreach ($contasCorrentes as $cpf => $conta) {
    // list quase um destructuring do js
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem(
        "$cpf $titular $saldo"
    );
}
// fecha o php
?>
<!-- html com php -->


<body>
    <h1>Contas correntes</h1>

    <dl>
        <!-- inves de < ?php echo eu posso usar < ?= -->
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>

            <dt>
                <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
            </dt>
            <dd>Saldo: <?= $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>
</body>