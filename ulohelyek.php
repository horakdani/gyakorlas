<?php

$array = [];

//$persons = readline("Add meg, hányan szeretnétek egymás mellett ülni: ");

for ($i = 0; $i < 195; $i++) {
//  array_push($array, $i);
    array_push($array, rand(0, 1));
}

$p = 0;
$counter = 0;
$counter2 = 0;


for ($rows = 0; $rows < 13; $rows++) {

    for ($col = 0; $col < 15; $col++) {
        echo sprintf("%4s", $array[$p]);
        $p++;
    }
    for ($x = $p - 15; $x < $p - 3; $x++){
        $counter = $array[$x] + $array[$x + 1] + $array[$x + 2];
        if ($counter = 0){
            $counter2++;
        }
        
        
    }
    if ($counter2 > 0){
        echo "    Van hely";
    }
    $counter = 0;
    $counter2 = 0;
    echo "\n";
}

