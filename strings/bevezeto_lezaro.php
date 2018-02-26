<?php

echo "\n";
$str = readline("Adj meg egy szöveget: ");
echo "\n";
$chr = readline("Add meg a feltöltő karaktert: ");
echo "\n";
$num = readline("Add meg a feltöltő karakter darabszámát: ");
echo "\n";

echo bevLez($str, $chr, $num);

//--------------function-----------------------
function bevLez($str, $chr, $num) {
    $strNew;
    $chrNum = "";
    for ($i = 0; $i < $num; $i++) {
        $chrNum .= $chr;
    }
    $strNew = $chrNum . $str . $chrNum;
    $strNew = str_replace(" ", $chr, $strNew);
    return $strNew;
}