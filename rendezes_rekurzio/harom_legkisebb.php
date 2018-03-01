<?php

$array = [15, 65, 98, 2, 84, 12, 116, 8, 23, 69, 116, 158, 42, 65, 1, 3, 2];

for ($x = 0; $x < 3; $x++){
    for ($y = $x + 1; $y < count($array); $y++){
        if ($array[$y] < $array[$x]){
            $temp = $array[$x];
            $array[$x] = $array[$y];
            $array[$y] = $temp;
        }
    }
    echo $array[$x] . " ";
}
