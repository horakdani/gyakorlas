<?php

function isPrime($num) {
    $vanoszto = false;
    $oszto = 2;
    while ($oszto < $num && $vanoszto == false) {
        if ($num % $oszto == 0) {
            $vanoszto = true;
        }
        $oszto++;
    }
    return $vanoszto == false;
}


if (!isPrime(499)) {
    echo "Nem prím\n";
} else {
    echo "Prím\n";
}


if (!isPrime(500)) {
    echo "Nem prím\n";
} else {
    echo "Prím\n";
}


if (!isPrime(957)) {
    echo "Nem prím\n";
} else {
    echo "Prím\n";
}