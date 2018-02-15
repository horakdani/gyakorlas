<?php
// szám bekérése
echo "\n";
$num = readline("Adj meg egy számot: ");

// szám osztóinak összege
$summ = $num;
$divider = 1;

while ($divider < $num){
    if ($num % $divider === 0){
        $summ = $summ + $divider;
    }
    $divider++;    
}

// prímszám vizsgálata
$vanoszto = false;
$oszto = 2;

while ($oszto < $summ && $vanoszto == false) {
    if ($summ % $oszto == 0) {
        $vanoszto = true;
    }
    $oszto++;
}

// eredmény kiírása
echo "\nA szám osztóinak összege: " . $summ . ", és ez az összeg ";

if ($vanoszto == true) {
    echo "nem prímszám.\n";
} else {
    echo "prímszám.\n";
}








