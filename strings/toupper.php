<?php

echo"\n";
$str = readline("Adj meg egy szöveget: ");
echo "\n";

echo myToUpper($str);
echo "\n";
//----------------function-------------------------------------------
function myToUpper($str){
    for ($x = 0; $x < strlen($str); $x++) {
    if (ord($str[$x]) >= 97 && ord($str[$x]) <= 122) {
        $str = str_replace($str[$x], chr(ord($str[$x]) - 32), $str);
    }
}
return $str;    
}