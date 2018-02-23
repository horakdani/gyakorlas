<?php
echo "\n";
$str = readline("Adj meg egy szöveget: ");
echo "\n";
$chr = readline("Add meg a törlendő karaktert: ");
echo "\n";
echo chrDel($str, $chr);
echo "\n";
//---------function-------------------------
function chrDel($str, $chr) {
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === $chr) {
            $str = str_replace($str[$i], "", $str);
        }
    }
    return $str;
   
}