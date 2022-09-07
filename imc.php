<?php

$peso  = 60;
$altura = 1.74;
$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc." . PHP_EOL;

if ($imc < 18.5) {
    echo "abaixo";
} elseif ($imc < 25) {
    echo "dentro";
} else {
    echo "acima";
}
