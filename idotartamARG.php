<?php

$firstTimeInSec = (int) ($argv[1] * 3600) + ($argv[2] * 60) + $argv[3];
$secondTimeInSec = (int) ($argv[4] * 3600) + ($argv[5] * 60) + $argv[6];

//echo "Az első időtartam: " . $firstTimeInSec . " másodperc \n";
//echo "Az második időtartam: " . $secondTimeInSec . " másodperc \n";

if ($secondTimeInSec > $firstTimeInSec) {
    echo "Az első időtratamnak nagyobbnak kell lennie, mint a másodiknak! De egyébként a különbség: " . ($firstTimeInSec - $secondTimeInSec) . " másodperc";
    } else {
    echo "A két időtartam közötti különbség: " . ($firstTimeInSec - $secondTimeInSec) . " másodperc";
   }
   






