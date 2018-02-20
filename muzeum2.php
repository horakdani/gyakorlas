<?php

$day = [];
$visitors = [];

echo "Add meg a nap sorszámát és a látogatószámot\n";

do {
    fscanf(STDIN, "%d %d", $d, $v);
    array_push($day, $d);
    array_push($visitors, $v);
} while ($d !== 0 && $v !== 0);

print_r($day);
print_r($visitors);

for ($i = 0; $i <= count($day); $i++){
    for ($x = $i+1; $x <= count($day); $x++){
        if ($day[$x] = $day[$i]){
            $day[$i] = $visitors[$i] + $visitors[$x];
            unset($day[$x]);
            unset($visitors[$i]);
            
        }
    }
    
}

print_r($day);
print_r($visitors);
