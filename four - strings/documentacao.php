<?php

// nao substitui a segunda pq ele identifica q ja substitui
$trans = ["hello" => "hi", "hi" => "hello"];
echo strtr("hi all, I said hello", $trans) . PHP_EOL;

// esse substitui
echo str_replace(['hello', 'hi'], ['hi', 'hello'], "hello all, I said hello") . PHP_EOL;
