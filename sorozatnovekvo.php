<?php

$numberOne = readline("Adj meg egy számot pozitív egész számot: ");
$numberTwo = readline("Adj meg egy másik pozitív egész számot: ");

$i = 1;

if ($numberOne > $numberTwo) {
    $littleNumber = $numberTwo;
    $bigNumber = $numberOne;
} else {
    $littleNumber = $numberOne;
    $bigNumber = $numberTwo;
}

while($littleNumber <= $bigNumber) {
    echo $littleNumber . "\n";
    $littleNumber = $littleNumber + $i;
    $i = $i+1;
} 



