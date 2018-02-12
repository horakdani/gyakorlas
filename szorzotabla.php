<?php

$N = readline("Adj meg egy számot, amit szorzótáblává alakíthatok: ");

echo "   |";

for ($i = 1; $i <= $N; $i++) {
    echo sprintf("%3s ", $i);
}

echo "\n";
echo "---+";

for ($i = 1; $i <= $N; $i++) {
    echo sprintf("%4s","----");
}

echo "\n";

for ($i = 1; $i <= $N; $i++) {
    echo sprintf("%3s", $i) . "|";
    for ($k = 1; $k <= $N; $k++) {
        echo sprintf("%3s ", $i * $k);
    }
    echo "\n";
}

