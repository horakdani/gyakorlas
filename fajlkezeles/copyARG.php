<?php

if ($argc > 2) {
    if ($argv[1] !== "--") {
        $source = fopen($argv[1], "r");
    } else {
        $source = STDIN;
    }

    $target = fopen($argv[2], "w");

    while (($line = fgets($source)) !== false) {
        fwrite($target, $line);
    }

    fclose($source);
    fclose($target);
}