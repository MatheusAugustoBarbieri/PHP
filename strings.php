<?php


$idade = 24;



// . concatena 
echo 'Olá mundo! Minha idade é ' . $idade . ' anos';

echo "\n";

//se for aspas duplas ele entende a variavel por conta do sifrao
echo "\t Olá mundo! \n Minha idade é $idade anos";

//quebra de linha como PHP_EOL pra funcionar em todas plataformas
echo "Olá mundo!" . PHP_EOL .  "Minha idade é $idade anos";
