<?php

$array = [];

//$persons = readline("Add meg, hányan szeretnétek egymás mellett ülni: ");

for ($i = 0; $i < 195; $i++) {
//  array_push($array, $i);
   array_push($array, rand(0, 1));
}

$p = 0;

for ($rows = 0; $rows < 13; $rows++) {
    for ($col = 0; $col < 15; $col++) {
        echo sprintf("%4s", $array[$p]);
        $p++;
    }
    if ($array[$p-15] + $array[$p-14] + $array[$p-13] == 0){
        echo "   Van 3 hely";
    }
    echo "\n";
}