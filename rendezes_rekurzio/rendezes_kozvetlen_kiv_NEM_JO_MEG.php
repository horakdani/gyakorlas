<?php

$array = [65, 15, 98, 2, 84, 12, 116, 8, 23, 69, 116, 158, 42, 65, 1, 3, 2];

sorter($array, 0, 1);

foreach ($array as $value) {
    echo $value . ", ";
}


function sorter($array, $i, $j) {
    if ($i == count($array)) {
        return;
    } elseif ($array[$i + $j] < $array[$i] && $j < count($array)) {
            $temp = $array[$i];
            $array[$i] = $array[$i + $j];
            $array[$i + $j] = $temp;
            return sorter($array, $i + 1, $j);
        } 
            
        } 
        
     
 