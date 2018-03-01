<?php

//Írj programot, mely kiírja a képernyőre az első n Fibonacci számot.
//Az n változó értékét a felhasználó adhassa meg! Írd meg rekurzívan és iteratívan is!

echo "\n";
$n = readline("Add meg, hányadik számjegyig listázzam a Fibonacci sorozatot: ");
echo "\n";

echo Fibonacci($n);

function Fibonacci($n, $i) {
    $x = 1;
    $y = 1;
  
    if ($n == $i) {
        return;
    } else {
        $x = $y;
        $y = $z;
        $n = $x + $y;
        return $n[$i] . Fibonacci($i+1);
    }
}
