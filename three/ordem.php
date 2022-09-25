<?php

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
];
// ordenada itens de arrays recebe 2 arrays como parametro
usort($notas, function (array $nota1, array $nota2): int {
    // <=> se nota2 for maior q nota 1 retorna -1; se for maior retorna 1; se for igual retorna 0.
    return $nota2['nota'] <=> $nota1['nota'];
});
// PERDE OS INDICES
// pra manter os indices use asort() ou rsort()

// sort() ordena em forma crescente --- modifica o proprio array e nao uma copia
// rsort() ordena em forma descrecente
var_dump($notas);
