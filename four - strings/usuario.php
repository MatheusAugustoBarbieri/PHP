<?php

$nome = 'Vinícius Dias';
$email = ' vinícius@alura.com.br ';
$senha = 'áéíóú';

// devolve o tamanho da string (o assento ocupa 1byte entao caractere com acento oculpa 2 bytes)
// mb_ para pegar a string multibyte para o acento nao contar como 2 itens
echo mb_strlen($senha) . PHP_EOL;

if (mb_strlen($senha) < 8) {
    echo 'Senha insegura' . PHP_EOL;
}

// pega a posição da string (se passar assim @alura.com.br ele pega de onde começou)
$posicaoDoArroba = strpos($email, '@');

// pega uma string entre as posições q voce passar (se nao informar o ultimo parametro ele pega ate o final)
$usuario = substr($email, 0, $posicaoDoArroba);

// deixa tudo em letra maiscula 
// strtoupper maiuscula -  strtolower minuscula (dessa maneira nao reconhecem caractere especial tem q ter a extenção do php mb_) 

echo mb_strtoupper($usuario) . PHP_EOL;

echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

list($nome, $sobrenome) = explode(' ', $nome);

echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL;

$csv = 'Vinicius Dias,24,vinicius@alura.com.br';
var_dump(explode(',', $csv));


//remove os espaços do inicio e do fim, ou o caracter q vc passar no segundo parametro
echo trim($email) . PHP_EOL;
