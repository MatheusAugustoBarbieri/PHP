<?php

$csv = ',.Vinicius Dias,24,.';
// Só manipula nas estremidades, no meio nao.
//remove os espaços do inicio e do fim, ou o caracter q vc passar no segundo parametro
echo trim($csv, '.,') . PHP_EOL;
// somente do esquerdo
echo ltrim($csv, '.,') . PHP_EOL;
// somente do direito
echo rtrim($csv, '.,') . PHP_EOL;
