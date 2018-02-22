<?php

//56,45,21,19,16,13,9,6,3,1
//1,3,6,9,13,16,19,21,45,56

$array = [56,45,21,19,16,13,9,6,3,1];

$increasing = true;
$decreasing = true;

for ($i = 0; $i < 10-1; $i++){
    if (!($array[$i] < $array[$i+1])){
        $increasing = false;
    }
    if (!($array[$i] > $array[$i+1])){
        $decreasing = false;
    }
}

if ($increasing){
    echo "A tömb elemei növekvő sorrendben vannak";
} else {
    if ($decreasing){
        echo "A tömb elemei csökkenő sorrendben vannak";
    } else {
        echo "A tömb elemei se nem növekvő, se nem csökkenő";
    }
}