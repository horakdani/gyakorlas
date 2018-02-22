<?php

echo "\n*************************************** \n";
echo "*** KIÍROM EGY SZÁM ÖSSZES OSZTÓJÁT *** \n";
echo "*************************************** \n";
$number = readline("*** Add meg a számot, aminek az osztóira kíváncsi vagy: \n");
echo "*** A szám osztói a következők:\n";

for ($x = 2; $x <= $number / 2; $x++) {
    if (($number % $x) == 0) {
        echo "*** " . $x . "\n";
    }
}
