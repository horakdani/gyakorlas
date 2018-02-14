<?php

$num = readline("Adj meg egy számot: ");

$vanoszto = FALSE;
$oszto = 2;
while ($oszto < $num && $vanoszto !== TRUE) {
    if ($num % $oszto == 0) {
        $vanoszto = TRUE;
    }
    $oszto++;
}

if ($vanoszto == TRUE) {
    echo "Nem prím";
} else {
    echo "Prím";
}

