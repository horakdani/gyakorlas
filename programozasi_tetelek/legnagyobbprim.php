<?php

$n = readline("Adj meg egy számot: ");
$iHighest = 1;
for ($i = 1; $i < $n; $i++) {
    $vanoszto = FALSE;
    $oszto = 2;    
    while ($oszto < $i && $vanoszto !== TRUE) {
        if ($i % $oszto == 0) {
            $vanoszto = TRUE;
        }
    $oszto++;
    }
    if ($vanoszto !== TRUE) {
        $iHighest = $i;
    } 
}
echo $iHighest;

