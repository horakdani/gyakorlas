<?php

echo "\n";
$str = str_replace(" ", "", readline("Adj meg egy szöveget: "));
echo "\n";
onlyOne($str);
echo "\n";
//---------------function------------------
function onlyOne($str) {
    $counter = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        for ($x = 0; $x < strlen($str); $x++) {
            if ($str[$x] === $str[$i]) {
                $counter++;
            }
        }
        if ($counter === 1) {
            echo $str[$i];
        }
        $counter = 0;
    }
}