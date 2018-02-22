<?php

$initNumber = readline("Adj meg egy számot: ");
$least = $initNumber;
$utmost = 1;
$newNumber = 1;
$summation = $initNumber;
$counter = 0;

while ($newNumber != 0) {
    $newNumber = readline("Adj meg egy számot (vagy 0-t, ha végeztél):");
    if ($newNumber < $least && $newNumber != 0) {
        $least = $newNumber;        
    }       
    if ($newNumber > $initNumber && $newNumber != 0) {
        $utmost = $newNumber;
    }
    $summation += $newNumber;
    $counter++;
}

echo "A legkisebb szám: " . $least . "\n";
echo "A legnagyobb szám: " . $utmost . "\n";
echo "A számok átlaga: " . $summation / $counter;



