<?php

$firstH = (int) readline("Első időtartam óra: ");
$firstMin = (int) readline("Első időtartam perc: ");
$firstSec = (int) readline("Első időtartam másodperc: ");

$secondH = (int) readline("Második időtartam óra: ");
$secondMin = (int) readline("Második időtartam perc: ");
$secondSec = (int) readline("Második időtartam másodperc: ");

$firstTimeInSec = (int) ($firstH * 3600) + ($firstMin * 60) + $firstSec;
$secondTimeInSec = (int) ($secondH * 3600) + ($secondMin * 60) + $secondSec;

echo "Az első időtartam: " . $firstTimeInSec . " másodperc \n";
echo "Az második időtartam: " . $secondTimeInSec . " másodperc \n";

if ($secondTimeInSec > $firstTimeInSec) {
    echo "Az első időtratamnak nagyobbnak kell lennie, mint a másodiknak! De egyébként a különbség: " . ($firstTimeInSec - $secondTimeInSec) . " másodperc";
    } else {
    echo "A két időtartam közötti különbség: " . ($firstTimeInSec - $secondTimeInSec) . " másodperc";
   }
   






