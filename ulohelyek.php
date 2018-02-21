<?php

echo "\n";

$array = [];

$persons = readline("Add meg, hányan szeretnétek egymás mellett ülni: ");

echo "\n";

// create an array with random elements from 1-195
for ($i = 0; $i < 195; $i++) {
//  array_push($array, $i);
    array_push($array, rand(0, 1));
}

// variables
$p = 0;
$a = 0;
$b = 0;

// array matrix
for ($rows = 0; $rows < 13; $rows++) {
    // display array elements
    for ($col = 0; $col < 15; $col++) {
        echo sprintf("%4s", $array[$p]);
        $p++;
    }
    // calculaet free seats beside each other
    for ($x = $p - 15; $x < $p - ($persons - 1); $x++) {
        for ($y = 0; $y < $persons; $y++) {
            $a = $a + $array[$x + $y];
        }
        if ($a == 0) {
            $b++;
        }
        $a = 0;
    }
    if ($b > 0) {
        echo "    OK";
    }
    $b = 0;
    echo "\n";
}

echo $option = readline("\nSzeretnéd átni az ülőhelyek sorszámait? i / n");



