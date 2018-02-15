<?php

$n = readline("Adj meg a háztető magasságát: ");

for ($y = 0; $y < $n; $y++){
    for ($x = 0; $x < $n-$y-1; $x++){
        echo " ";
    }
    echo "#";
    for ($x = 0; $x < $y*2; $x++){
        echo " ";
    }
    echo "#\n";
}



