<?php

if ($argc < 4) {
    echo "Kérlek add meg a 100-asok, 200-asok és 500-asok számát parametrikusan!";
    exit(1);
}

if ($argc == 4) {
    $kassza = $argv[1] * 100 + $argv[2] * 200 + $argv[3] * 500;
    echo "A pénztár teljes összege: " . $kassza . "Ft";
}

if ($argc == 2 && $argv[1] == "--") {
    $array = [];
    while (($money = fgets(STDIN)) !== false) {
        $array[] = trim($money);
        $kassza = $array[0] * 100 + $array[1] * 200 + $array[2] * 500;
        echo "A pénztár teljes összege: " . $kassza . "Ft";
    }
}


//elseif ($argc == 2 && $argv[1] == "--") {
//     $names = [];
//
//     while(($name = fgets(STDIN)) !== false) {
//       $names[] = trim($name);
//     }
//  }