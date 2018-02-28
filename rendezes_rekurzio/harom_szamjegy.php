<?php

//Írj függvényt, amely a paraméterként kapott pozitív egész számot három számjegyenként
//csoportosított formában írja ki. Pl.: 16 077 216. Próbáld ki más számokra is: 999, 1000, 12, 0, 1000222!

$num = readline("Adj meg egy számot: ");

haromSzamjegy($num);

function haromSzamjegy($num){
    if ($num / 1000 > 0){
        echo $num;
    } else {
        haromSzamjegy($num / 100);
        echo " " . ($num % 3) . " ";
    }
}