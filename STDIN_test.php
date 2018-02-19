<?php

$fp = fopen("STDIN.txt", "w");
fwrite($fp, "5\n6\n1");
fclose($fp);

$fg = fopen("STDIN.txt", "r");

$array = [];

while (($lines = fgets($fg)) !== false) {

    $array[] = $lines;
}

foreach ($array as $value) {
    echo $value;
}

fclose($fg);