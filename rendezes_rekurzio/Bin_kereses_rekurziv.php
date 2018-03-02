<?php

$array = [1, 3, 8, 23, 49, 115, 314];

echo binSearch($array, 115, 0, count($array));

function binSearch($array, $searchingValue, $arrayHead, $arrayEnd) {
    $middle = floor(($arrayHead + $arrayEnd) / 2);
    if ($arrayHead <= $arrayEnd && $array[$middle] != $searchingValue) {
        if ($array[$middle] > $searchingValue) {
            $arrayEnd = $middle - 1;
        } else {
            $arrayHead = $middle + 1;
        }
        return binSearch($array, $searchingValue, $arrayHead, $arrayEnd);
    }
    if ($arrayEnd < $arrayHead) {
        return false;
    }
    return ($middle);
}
