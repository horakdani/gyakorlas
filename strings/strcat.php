<?php

echo "\n";
$str1 = readline("Adj meg egy szöveget: ");
echo "\n";
$str2 = readline("Add meg a csatolandó szöveget: ");
echo "\n";

echo strcat($str1, $str2);

//------------function-------------------
function strcat($str1, $str2) {
    $str1 .= " $str2";
    return $str1;
}