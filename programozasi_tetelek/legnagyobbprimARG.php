<?php

$iHighest = 1;

if ($argc < 2) {
    echo "Kérleg adj meg az argumentumban egy számot!";
    exit(1);
} elseif ($argc == 2 && $argv[1] == "--") {
    $array = [];
    while (($number = fgets(STDIN)) !== false) {
        $array[] = $number;
        $num = $array[0];
    }
} else {
    $num = $argv[1];
}

for ($i = 1; $i < $num; $i++) {
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
