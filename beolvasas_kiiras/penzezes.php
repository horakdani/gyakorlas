<?php

$szazas = (int) readline("100-asok száma: ");
$ketszazas = (int) readline("200-asok száma: ");
$otszazas = (int) readline("500-asok száma: ");

$kassza = $szazas * 100 + $ketszazas * 200 + $otszazas * 500;
echo "A pénztár teljes összege: " . $kassza . "Ft";
 
