<?php

// string numerica, se a string tiver somente numeros o php entende para fazer operações matematicas
$anoNascimento = '1997';

$idade = 2022 - $anoNascimento;

echo $idade . PHP_EOL;

if ($anoNascimento == 1997) {
    echo 'SIM' . PHP_EOL;
} else {
    echo 'NÃO' . PHP_EOL;
}
