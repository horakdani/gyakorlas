<?php

$checkNumber = readline("Add meg szamot: ");

if (isItFibbo($checkNumber)) {
    echo "so simple so easy";
} else {
    echo "shamless";
}

function isItFibbo($checkNumber, $i = 0) {
    $fib = Fibonacci($i);

    if ($fib < $checkNumber) {
        return isItFibbo($checkNumber, ++$i);
    }
    return $fib == $checkNumber;
}

function Fibonacci($howLong) {
    if ($howLong <= 1) {
        return $howLong;
    } else {
        return Fibonacci($howLong - 1) + Fibonacci($howLong - 2);
    }
}