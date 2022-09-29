<?php

for ($contador = 1; $contador <= 15; $contador++) {
    // continue pula a repeticao atual e continua executando
    // break sai da repeticao
    if ($contador == 13) {
        continue;
    }

    echo "$contador" . PHP_EOL;
}
