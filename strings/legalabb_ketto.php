<?php

echo "\n";
$str = readline("Adj meg egy szöveget: ");
echo "\n";

echo "Az első karakter, amiből legalább kettő van a szövegben: " . minTwo($str) . "\n";

//-----------function-----------------------------
function minTwo($str) {
    for ($x = 0; $x < strlen($str); $x++) {
        for ($y = $x + 1; $y < strlen($str); $y++) {
            if ($str[$x] == $str[$y]) {
                return $str[$x];
            }
        }
    }
}