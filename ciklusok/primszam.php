<?php

$num = readline("Adj meg egy számot: ");

$vanoszto = false;
$oszto = 2;
while ($oszto < $num && $vanoszto == false) {
    if ($num % $oszto == 0) {
        $vanoszto = true;
    }
    $oszto++;
}

if ($vanoszto == true) {
    echo "Nem prím";
} else {
    echo "Prím";
}