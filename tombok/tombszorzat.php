<?php
echo "\n";
$array = [4,63,25,12,-89,4,65,-7,2,63,45,95];
$z = readline("Adj meg egy egész számot: ");

$countArray = count($array);
$isMultiple = 0;

for ($i = 0; $i < $countArray; $i++){
    for ($k = $i + 1; $k < $countArray; $k++){
        $multiple = $array[$i] * $array[$k];
        if ($multiple == $z){
            echo $array[$i] . " * " . $array[$k] . " = " . $z . "\n";
            $isMultiple++;
        }
    }
}

if ($isMultiple > 0){
    echo "\nA tömb tartalmaz két olyan számot, aminek szorzata az általad megadott szám.";
}


