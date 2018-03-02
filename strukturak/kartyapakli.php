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

for ($i = 0; $i < 4; $i++) {
    if ($kartya[$i]["szin"] == $i) {
        echo "oke";
    } else {
        die("hiányos");
    }
    for ($j = 3; $j <= 14; $j++) {
        if ($kartya[$i]["szam"] == $j) {
            echo "OK";
        } else {
            die("HIANYOS");
        }
    }
}

