<?php

// variables
$p = 180;
$a = 0;
$b = 0;

// request seat data
echo "\n";
$persons = readline("Add meg, hányan szeretnétek egymás mellett ülni: ");
echo "\n";

// create an array with random elements to placeholders from 1 to 195
$seatStatus = [];
for ($i = 0; $i < 195; $i++) {
    array_push($seatStatus, rand(0, 1));
}

// array matrix
for ($rows = 0; $rows < 13; $rows++) {
    // display array
    for ($q = $p; $q < $p + 15; $q++) {
        echo sprintf("%4s", $seatStatus[$q]);
    }
    // calculate free seats
    for ($q = $p; $q < $p + 15 - ($persons - 1); $q++) {
        for ($y = 0; $y < $persons; $y++) {
            $a = $a + $seatStatus[$q + $y];
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
    $p = $p - 15;
    echo "\n";
}
$p = 180;

echo "\n";

// display seat numbers
$seatNumbers = [];
echo $option = readline("Szeretnéd látni az ülőhelyek kiosztását? (i / n): ");

if ($option == "i") {
    for ($i = 1; $i <= 195; $i++) {
        array_push($seatNumbers, $i);
    }
    echo "\n";
    // display array elements
    for ($rows = 0; $rows < 13; $rows++) {
        for ($q = $p; $q < $p + 15; $q++) {
            echo sprintf("%4s", $seatNumbers[$q]);
        }
        echo "\n";
        $p = $p - 15;
    }
} else {
    die();
}

// check array element are in the right placeholder of array
echo "\nRandom check:\n\nseat #195: $seatStatus[194]\nseat #181: $seatStatus[180]\nseat #15:  $seatStatus[14]\n";
