<?php

echo "\n";
$str = readline("Adj meg egy szöveget: ");
echo "\n";
$change = readline("Sorold fel, mely karaktereket szeretnéd kitörölni a szövegből: ");
echo "\n";

squeeze($str, $change);

//----------------function-------------------------
function squeeze($str, $change) {
    for ($x = 0; $x < strlen($str); $x++) {
        for ($y = 0; $y < strlen($change); $y++) {
            if ($change[$y] == $str[$x]) {
                $str = str_replace($str[$x], "", $str);
            }
        }
    }
    echo $str . "\n";
}