<?php

echo "\n";
$str = readline("Add meg egy sztringet: ");
echo "\n";
$mit = readline("Add meg, melyik karaktert szeretnéd kicserélni a sztringben: ");
echo "\n";
$mire = readline("Add meg, mire szeretnéd ezt a karaktert kicserélni: ");
echo "\n";

echo "Az eredmény: " .charReplace($str, $mit, $mire) . "\n";
echo "\n";
echo "Az eredmény: " . charTurn($str, $mit, $mire) . "\n";

//-----------function---------------------------------------------------------
function charReplace($str, $mit, $mire) {
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == $mit) {
            $str[$i] = $mire;
        }
    }
    return $str;
}

function charTurn($str, $mit, $mire) {
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == $mit) {
            $str[$i] = $mire;
        } elseif ($str[$i] == $mire) {
            $str[$i] = $mit;
        }
    }
    return $str;
}