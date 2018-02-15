<?php
echo "\n";
$number = readline("Adj meg egy számot: ");
$array[] = $number;
$summ = 0;

while ($number != 0){
    $number = readline("Add meg a következő számot (vagy 0-t, ha végeztél): ");
    $array[] = $number;
}

array_pop($array);

$numElements = count($array);

for ($x = $numElements - 5; $x < $numElements; $x++){
    $summ = $summ + $array[$x];
}

echo "\nA bevitt számok  a következők: ";
foreach ($array as $value) {
    echo $value . ", ";
}
echo "\n\nAz az utolsó öt szám átlaga: " . $summ / 5 . "\n";