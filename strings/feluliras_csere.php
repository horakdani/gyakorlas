<?php

echo "\n";
$str = readline("Add meg egy sztringet: ");
echo "\n";
$mit = readline("Add meg, melyik karaktert szeretnéd kicserélni a sztringben: ");
echo "\n";
$mire = readline("Add meg, mire szeretnéd ezt a karaktert kicserélni: ");
echo "\n";

echo charReplace($str, $mit, $mire);
echo "\n";
echo charTurn($str, $mit, $mire);

//-----------function---------------------------------------------------------
function charReplace($str, $mit, $mire) {
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == $mit) {
            $str[$i] = $mire;
        }
    }
    echo "Az eredmény: " . $str . "\n";
}

function charTurn($str, $mit, $mire) {
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == $mit) {
            $str[$i] = $mire;
        } elseif ($str[$i] == $mire) {
            $str[$i] = $mit;
        }
    }
    echo "Az eredmény: " . $str . "\n";
}