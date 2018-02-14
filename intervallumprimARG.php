<?php

$n = $argv[1];
$m = $argv[2];

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