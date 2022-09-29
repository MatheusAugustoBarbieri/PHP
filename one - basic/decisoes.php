<?php

$idade = 21;
$numeroDePessoas = 2;

if ($idade >= 20) {
    echo "Pode entrar";
} else if ($idade >= 21 && $numeroDePessoas > 1) {
    echo "Pode entrar";
} else {
    echo "Você não pode entrar";
}

echo PHP_EOL;
echo "Adeus!";

// TERNARIO FUNCIONA IGUAL JS
// $variavel = $condicao ? $valorSeVerdadeiro : $valorSeFalso;  