<?php
echo "\n";
$a = readline("Adj meg egy számot: ");
$b = readline("adj meg egy másik számot: ");

function elojel($a, $b){
    if($a > 0 && $b > 0){
        echo "\nA két szám előjele megegyezik, mindekét szám pozitív.\n";
    } elseif($a < 0 && $b < 0) {
        echo "\nA két szám előjele megegyezik, minkét szám negatív.\n";        
    } else {
        echo "\nA két szám előjele nem egyezik meg.\n";
    }
}

elojel($a, $b);
