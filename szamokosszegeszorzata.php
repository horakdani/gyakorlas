<?php
$number = readline("Adj meg eg számot: ");
$multiplication = 1;
$summation = 0;

while ($number != 0) {
    $multiplication *= $number;
    $summation += $number;
    $number = readline("Adj meg egy számot (vagy 0-t, ha végeztél)");
}

echo "A megadott számok szorzata: " . $multiplication . "\n";
echo "A megadott számok összege: " . $summation;

