<?php

//Írj rekurziót használó programot, amely beolvassa a szabványos bemenetén érkező 
//karaktersorozatot, és visszafelé írja ki azt! A program ne használjon tömböket!

$str = readline("Adj meg egy szöveget: ");

echo megfordit($str, 0);

function megfordit($str, $i) {
    if ($i == strlen($str)) {
        return;
    } else {
        return megfordit($str, $i + 1) . $str[$i];
    }
}