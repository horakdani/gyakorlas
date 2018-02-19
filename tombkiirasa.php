<?php

$array = [25, 69, "kutyagumi", 54, 8, 77, 6, 29, 10, 3, 98];

print_r(array_values($array));
echo "\n";

echo "A tömb: " . json_encode($array) . "\n\n";

echo "A tömb elemei: ";
foreach ($array as $value) {
    echo $value . ", ";
    
}
echo "\n";


