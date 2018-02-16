<?php

echo "\n";
$persons = readline("Add meg, hányan szeretnétek egymás mellett ülni: ");
echo "\n";
$array = [];
for ($i = 0; $i < 195; $i++) {
//    array_push($array, $i);
    array_push($array, rand(0, 1));
}

$p = 0;
$h = 0;


for ($rows = 0; $rows < 13; $rows++) {
    for ($col = 0; $col < 15; $col++) {
        echo sprintf("%4s", $array[$p]);
        for ($s = 0; $s < $persons; $s++){
            $h = $array[$p] + $array[$p + $s];            
        }
        if ($h = 0){
            echo "trallala";
        }
        $p++;
    }
    echo "\n";
}


//if ($h > 0){
//        echo "   -->   Ebben a sorban van 3 hely egymás mellett!";
//    }

// if ($array[$p] + $array[$p+1] + $array[$p+2] = 0){        
//        $h++;
//        }