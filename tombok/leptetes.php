<?php

$array = [4,63,25,12,-89,4,65,-7,2,63,45,95];

for ($i = 0; $i < 3; $i++){
    $shift = array_shift($array);
    $push = array_push($array, $shift);
    foreach ($array as $value) {
        echo $value . ", ";
    }
    echo "\n";
}