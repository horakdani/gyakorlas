<?php

$number = readline("Adj meg egy pozitív egész számot: ");
$counter = 1;
for ($i = 1 ; $i < $number; $i++) {
    if ($number % $i == 0) {
        $counter++;
    }
}

echo $counter;



