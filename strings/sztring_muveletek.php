<?php

echo "\nALAPVETŐ SZTRING MŰVELETEK:\n\n";

$string = readline("Írj/illessz be szöveget: ");

echo "\n-----------------------------------------------------------------------------------------------------------------\n";
echo "\$string:\t\t" . "\"" . $string . "\"";
echo "\n-----------------------------------------------------------------------------------------------------------------\n\n";
echo "strlen:\t\t\tA sztring " . strlen($string) . " karakter hosszú.\n\n";
echo "strpos:\t\t\tAz \"u\" betű első előfordulása a sztringben a " . strpos($string, "u") . "-dik helyen van.\n\n";
echo "substr:\t\t\t" . substr($string, 7, 5) . "\n\n";
echo "str_replace:\t\t" . str_replace(" ", "", $string) . "\n\n";
echo "strtoupper:\t\t" . strtoupper($string) . "\n\n";
echo "trim:\t\t\t" . trim($string) . "\n\n";
echo "ltrim:\t\t\t" . ltrim($string) . "\n\n";
echo "substr_count:\t\t Az \"or\" karakterlánc " . substr_count($string, "or") . "-szor fordul elő a sztingben\n\n";

echo "explode:\t\t";
$str = explode(" ", trim($string));
foreach ($str as $value) {
    echo " ->" . $value;
}
echo "\n\n";

echo "implode:\t\t";
echo implode(" ", $str);
echo "\n\n";

echo "LOW CHAR NUM FUNC:\tA sztringben " . lowerCharNum($string) . "db kisbetűs karakter található.\n\n";

//------------functions-------------------------------
function lowerCharNum($string) {
    $counter = 0;
    for ($i = 0; $i < strlen($string); $i++) {
        if (ctype_lower($string[$i]) === true) {
            $counter++;
        }
    }
    return $counter;
}