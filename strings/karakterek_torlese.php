<?php

echo "\n";
$str = readline("Adj meg egy szöveget: ");
echo "\n";
$chr = readline("Add meg a törlendő karaktert: ");
echo "\n";

for ($i = 0; $i < 1; $i++){
    if ($str[$i] === $chr){
        $str = str_replace($str[$i], "", $str);
    } 
}

echo $str;
echo "\n";