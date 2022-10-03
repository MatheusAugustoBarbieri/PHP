<?php

$telefones = ['(24) 99999 - 9999', '(21) 99999 - 9999', '(24) 2222 - 2222'];

foreach ($telefones as $telefone) {
    $regex = '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/';
    // verifica se o regex é valido
    // terceiro parametro é uma variavel q armazena os grupos de captura q são "()"
    $telefoneValido = preg_match(
        $regex,
        $telefone,
        $correspondencia
    );

    if ($telefoneValido) {
        echo 'Telefone válido' . PHP_EOL;
    } else {
        echo 'Telefone inválido' . PHP_EOL;
    }
    // substitui os grupos de captura
    echo preg_replace(
        $regex,
        '(XX) \2',
        $telefone
    ) . PHP_EOL;
}
