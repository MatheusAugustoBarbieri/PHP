<?php

$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria',
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
];

$alunos2022 = [...$alunos2021, 'Carlos Vinicius', ...$novosAlunos];
array_push($alunos2022, 'Alice', 'Bob', 'Charlie');
$alunos2022[] = 'Luiz';
// add inicio
array_unshift($alunos2022, 'Stephane', 'Rafaela');
// remove primeiro elemento array
echo array_shift($alunos2022) . PHP_EOL;
// remove ultimo element array
echo array_pop($alunos2022) . PHP_EOL;

var_dump($alunos2022);
