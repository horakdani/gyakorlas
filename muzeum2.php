<?php

$array = array_fill(1, 7, 0);
$min = $array[1];


echo "Add meg a nap sorszámát és a látogatószámot\n";

do {
    fscanf(STDIN, "%d %d", $day, $visitors);
    $array[$day] = $array[$day] + $visitors;
} while ($visitors !== 0);

print_r($array);

for ($i = 1; $i <= 7; $i++) {
    if ($array[$i] < $min) {
        $min = $array[$i];
    }
}

echo "A következő napon volt a legkevesebb látogató: " . $min;





