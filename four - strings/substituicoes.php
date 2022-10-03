<?php

$texto = 'Texto com qualquer coisa poxa e caramba';
// retorna uma nova string com os valores substituidos(substitui poxa por p e caramba por c)
echo str_replace(
    ['poxa', 'caramba'],
    ['p', 'c'],
    $texto
) . PHP_EOL;

//essa função trabalha com caracteres e nao com string
echo strtr($texto, 'poxa', '***@') . PHP_EOL;
// para trabalhar com string
echo strtr($texto, ['poxa' => 'p', 'caramba' => 'c']) . PHP_EOL;
