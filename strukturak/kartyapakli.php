<?php

$kartya = [];

for ($i = 1; $i <= 4; $i++) {
    for ($j = 2; $j <= 14; $j++) {
        $kartya[] = ["szin" => $i, "szam" => $j];
    }
}

for ($i = 0; $i < rand(50, 100); $i++) {
    $rand = rand(0, 51);
    $rand2 = rand(0, 51);
    $temp = $kartya[$rand];
    $kartya[$rand] = $kartya[$rand2];
    $kartya[$rand2] = $temp;
}

sort($kartya);

//foreach ($kartya as $kartya) {
//    echo $kartya["szin"] . " " . $kartya["szam"] . "\n"; 
//}

for ($k = 0; $k < count($kartya); $k += 13) {
    for ($i = $k; $i < $k + 12; $i++) {
        if ($kartya[$i]["szin"] == $kartya[$i + 1]["szin"]) {
            continue;
        } else {
            die("\nA pakli HIÁNYOS.\n");
        }
        if ($kartya[$i]["szam"] == $kartya[$i + 1]["szam"] - 1) {
            continue;
        } else {
            die("\nA pakli HIÁNYOS.\n");
        }
    }
}

echo "\nA pakli TELJES.\n";

// Gyuri része:
if (doubleCard($kartya)) {
    echo "\nVan olyan lap a pakliban, ami kétszer fordul elő\n";
} else {
    echo "\nA pakliban nincs kétszer ugyaza a lap.\n";
}

function doubleCard($kartya, $i = 0) {
    if ($i < count($kartya) - 1) {
        if ($kartya[$i] != $kartya[$i + 1]) {
            return doubleCard($kartya, $i + 1);
        } else {
            return true;
        }
    }
    return false;
}
