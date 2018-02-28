<?php

$a = [10, 32, 53, 13];

//for ($i = 0; $i < count($a); $i++) {
//    echo $a[$i] . "\n";
//}

elemKiirTol($a, 1);

function elemKiirTol($a, $i) {
    if ($i < count($a)) {
        echo $a[$i] . "\n";
        elemKiirTol($a, $i + 1);
    }
}