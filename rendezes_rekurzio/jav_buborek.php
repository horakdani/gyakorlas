<?php

$array = [15, 65, 98, 2, 84, 12, 116, 8, 23, 69, 116, 158, 42, 65];

echo "\nAz eredeti tömb elemei: ";
foreach ($array as $value) {
    echo $value . ", ";
}

for ($x = count($array) - 1; $x > 0; $x--) {
    $isExchanged = false;
    for ($y = 0; $y < $x; $y++) {
        if ($array[$y + 1] < $array[$y]) {
            $temp = $array[$y];
            $array[$y] = $array[$y + 1];
            $array[$y + 1] = $temp;
            $isExchanged = true;
        } elseif (!$isExchanged) {
            continue;
        }
    }
}

echo "\n\nA rendezett tömb elemei: ";
foreach ($array as $value) {
    echo $value . ", ";
}
echo "\n";
