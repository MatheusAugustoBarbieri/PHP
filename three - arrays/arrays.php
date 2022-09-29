<?php

$array = [
    0 => 'um',
    1 => 'dois',
    3 => 'tres',
];

foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral em português é: $nomeNumero" . PHP_EOL;
}

echo "Total: " . count($array) . PHP_EOL;
// verifica se o array é uma lista 0,1,2 se nao retorna false
var_dump(array_is_list($array));
