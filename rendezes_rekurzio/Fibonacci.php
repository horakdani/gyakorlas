<?php

$num = readline("Add meg hanyadik Fibonacci szam erdekel: ");


for ($x = 1; $x <= $num; $x++){
    echo Fibonacci($x) . " ";
}

function Fibonacci($num) {
    if ($num <= 1) {
        return $num;
    } else {
        return Fibonacci($num - 1) + Fibonacci($num - 2) ;
    }
}