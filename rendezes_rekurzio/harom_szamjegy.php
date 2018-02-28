<?php

//Írj függvényt, amely a paraméterként kapott pozitív egész számot három számjegyenként
//csoportosított formában írja ki. Pl.: 16 077 216. Próbáld ki más számokra is: 999, 1000, 12, 0, 1000222!
echo "\n";
$num = readline("Adj meg egy számot: ");

echo "\n" . haromSzamjegy($num) . "\n";

function haromSzamjegy($num) {
    if ($num / 1000 < 1) {
        return $num % 1000;
    } else {
        return haromSzamjegy($num / 1000) . " " . ($num % 1000);
    }
}