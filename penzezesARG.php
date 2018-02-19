<?php

if ($argc < 2) {
    echo "Kérlek add meg a 100-asok, 200-asok és 500-asok számát parametrikusan!";
    exit(1);
}

if ($argc == 4) {
    $kassza = $argv[1] * 100 + $argv[2] * 200 + $argv[3] * 500;
    echo "A pénztár teljes összege: " . $kassza . "Ft";
}


$array = [];

if ($argc == 2 && $argv[1] == "--") {
    
    while (($lines = fgets(STDIN)) !== false) {
        $array[] = $lines;
    }
    $wallet = (int)$array[0] * 100 + (int)$array[1] * 200 + (int)$array[2] * 500;
        echo "A pénztár teljes összege: " . $wallet . "Ft";
}

