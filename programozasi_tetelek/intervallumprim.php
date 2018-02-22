<?php

$n = readline("Adj meg egy intervallum kezdő elemét: ");
$m = readline("Adj meg egy intervallum záró elemét: ");

for ($i = $n; $i <= $m; $i++) {
    $vanoszto = FALSE;
    $oszto = 2;
    while ($oszto < $i && $vanoszto !== TRUE) {
        if ($i % $oszto == 0) {
            $vanoszto = TRUE;
        }
    $oszto++;
    }
    if ($vanoszto !== TRUE) {
        echo $i . "\n";
    } 
}






