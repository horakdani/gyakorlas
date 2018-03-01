<?php

$whichFibonacci = readline("Add meg hanyadik Fibonacci szam erdekel: ");

echo Fibonacci($whichFibonacci);

function Fibonacci($whichFibonacci) {
    if ($whichFibonacci <= 1) {
        return $whichFibonacci;
    } else {
        ;
        return $fibonacci . " " .$fibonacci = Fibonacci($whichFibonacci - 1) + Fibonacci($whichFibonacci - 2);
    }
}
