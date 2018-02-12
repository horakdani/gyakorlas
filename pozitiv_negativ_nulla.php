<?php
# request a number
echo "\n********************************************************************* \n";
echo "***   ADJ MEG EGY SZÁMOT, AMIRŐL MEGÁLLAPÍTOK NÉHÁNY JELLEMZŐT!   *** \n";
echo "********************************************************************* \n";
$number = readline("*** Add meg a számot (tört szám esetén tizedespontot használj!): ");
echo "********************************************************************* \n";
echo "*** Az általad megadott szám: \n";

# logic
if ($number < 0) {
    echo "*** NEGATÍV \n";
} elseif ($number > 0) {
    echo "*** POZITÍV \n";
} else {
    echo "*** NULLA \n";
}

if (($number % 2) == 1) {
    echo "*** PÁRATLAN \n";
}
if (($number % 2) == 0) {
    echo "*** PÁROS \n";
}

$intNumber = floor($number);

if (($number - $intNumber) == 0) {
    echo "*** EGÉSZ SZÁM";
} else {
    echo "*** TÖRT SZÁM";
}

echo "\n********************************************************************* \n";























