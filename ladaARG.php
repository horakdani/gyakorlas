<?php
// méret bekérése
$size = $argv[1];
// felső sor
echo "+";
for ($x = 2; $x < $size; $x++) {
    echo "-";
}
echo "+\n";
// függőleges oldalak és láda belseje
for ($y = 2; $y < $size; $y++) {
    echo "|";
    for ($x = 2; $x < $y; $x++) {
        echo " ";
    }
    echo "\\";
    for ($x = $y+1; $x < $size; $x++) {
        echo " ";
    }
    echo "|\n";
}
// alsó sor
echo "+";
for ($x = 2; $x < $size; $x++) {
    echo "-";
}
echo "+\n";


