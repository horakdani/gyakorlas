<?php

// variables
$p = 0;
$a = 0;
$b = 0;

// request seat data
echo "\n";
$persons = readline("Add meg, hányan szeretnétek egymás mellett ülni: ");
echo "\n";

// create an array with random elements from 1-195
$array = [];
for ($i = 0; $i < 195; $i++) {
    array_push($array, rand(0, 1));
}



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


echo "\nˇ";
$p = 180;
$array2 = [];
echo $option = readline("Szeretnéd látni az ülőhelyek kiosztását? (i / n): ");

if ($option = "i") {
    for ($i = 1; $i <= 195; $i++) {
        array_push($array2, $i);
    }
    echo "\n";
    print_r($array2);
    // display array elements
    for ($rows = 0; $rows < 13; $rows++) {
        // display array elements

        for ($q = $p; $q < $p + 15; $q++) {

            echo sprintf("%4s", $array2[$q]);
        }
        echo "\n";
        $p = $p - 15;
    }
}





