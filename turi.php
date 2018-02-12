<?php

echo "\n********************************************************************* \n";
echo "***                                                    PÓLÓVÁSÁR  *** \n";
echo "*** Egy póló ára 500 Ft                                           *** \n";
echo "*** A második póló ára 450 Ft                                     *** \n";
echo "*** Minden további póló ára már csak 400 Ft                       *** \n";
echo "********************************************************************* \n";
$quantity = readline("*** Hány pólót szeretnél vásárolni? Add meg a darabszámot: ");
echo "********************************************************************* \n";

if ($quantity == 1) {
    echo "*** Fizetendő összeg: 500 Ft";
} elseif ($quantity == 2) {
    echo "*** Fizetendő összeg: 950 Ft";
} else {
    echo "*** Fizetendő összeg: " . ((($quantity - 2) * 400) + 950) . " Ft";
}

echo "\n********************************************************************* \n";


