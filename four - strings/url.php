<?php

$url = 'http://alura.com.br/';

// verifica se COMEÇA com determinada string
if (str_starts_with($url, 'https')) {
    echo 'É uma URL segura';
} else {
    echo 'Não é uma URL segura';
}

echo PHP_EOL;

// verifica se TERMINA com determinada string
if (str_ends_with($url, '.br')) {
    echo 'É um domínio do Brasil';
} else {
    echo 'É não um domínio do Brasil';
}

echo PHP_EOL;
