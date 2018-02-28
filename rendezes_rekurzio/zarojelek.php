<?php

//Írj rekurzív programot, amelyik egy nyitó zárójellel kezdődő sztringben
//megtalálja a zárójel bezáró párját. (A zárójelek (egymásba () lehetnek)) ágyazva.

$str = "(trallala)lala";

echo zarojel($str, 1);

function zarojel($str, $i) {
    if ($i == strlen($str) || $str[$i] == ")") {
        return;
    } else {
        return $str[$i] . zarojel($str, $i + 1);
    }
}