<?php

$number = readline("Addj meg egy számot, amiről eldöntöm, hogy négyzetszám-e, vagy sem: ");

for ($i = 2; $i < $number; $i++) {
    if ($number % $i == 0 && $i * $i == $number) {
        echo "Az általad megadott szám a " . $i . " négyzetszáma \n"; 
    } 
}



