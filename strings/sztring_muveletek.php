<?php

echo "\nALAPVETŐ SZTRING MŰVELETEK:\n\n";

$string = " Lorem ipsum dolor sit amet, ius in fugit elaboraret. ";

echo "\n\$string:\t\t" . "\"" . $string . "\"\n\n";
echo "strlen:\t\t\tA sztring " . strlen($string) . " karakter hosszú.\n\n";
echo "strpos:\t\t\tAz \"u\" betű első előfordulása a sztringben a " . strpos($string, "u") . "-dik helyen van.\n\n";
echo "substr:\t\t\t" .substr($string, 7, 5) . "\n\n";
echo "str_replace:\t\t" .str_replace("o", "OO", $string) . "\n\n";
echo "strtoupper:\t\t" . strtoupper($string) . "\n\n";
echo "trim:\t\t\t" . trim($string) . "\n\n";
echo "ltrim:\t\t\t" . ltrim($string) . "\n\n";

echo "explode:\t\t";
$str = explode(" ", trim($string));
foreach ($str as $value) {
    echo " ->" . $value;
}
echo "\n\n";

echo "implode:\t\t";
echo implode(" ", $str);
echo "\n\n";







