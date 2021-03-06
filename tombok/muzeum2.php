<?php

$day = [];
$visitors = [];

echo "\nAdd meg a nap sorszámát és a látogatószámot\n";
echo "Ha végeztél, \"0 0\"-t írj be!\n\n";

do {
    fscanf(STDIN, "%d %d", $d, $v);
    array_push($day, $d);
    array_push($visitors, $v);
} while ($d !== 0 && $v !== 0);

for ($i = 0; $i < count($day); $i++){
    for ($x = $i+1; $x < count($day); $x++){
        if ($day[$x] == $day[$i]){
            $visitors[$i] += $visitors[$x];
            $visitors[$x] = 0;
        }
    }    
}

$visitorsMin = $visitors[0];

for ($i = 0; $i < count($visitors) - 1; $i++){
    if ($visitors[$i + 1] < $visitorsMin && $visitors[$i + 1] !== 0){
        $visitorsMin = $visitors[$i + 1];
        $dayMin = $day[$i + 1];
    }
}

echo "\nA " . $dayMin . "-dik napon voltak a legkevesebben (" . $visitorsMin . " látogató).\n";