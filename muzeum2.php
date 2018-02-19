<?php

$array = [];
$day = 1;

while ($day != "0 0"){
    $day = readline("Add meg a nap sorszámát és a látogatók számát (szóközzel elválasztva): ");
    array_push($array, $day);
}

print_r($array);

    for ($i = 0; $i < strlen($array[0]); $i++) {
        echo $array[0][$i] . "-";
    }

//    if ($array[0][0] = $array[1][0]){
//       $d = (substr($array[0], 2, 4) + substr($array[1], 2, 4));
//       $array[0] = $array[0][0] . " " . $d;
//        
//        
//    }


//print_r(array_values($array));


//echo substr($array[1], 2, 4);




