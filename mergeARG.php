<?php

if ($argc > 3) {

    $source1 = fopen($argv[1], "r");
    $source2 = fopen($argv[2], "r");
    $target = fopen($argv[3], "w");

    while (($line = fgets($source1)) !== false) {
        fwrite($target, $line);
    }

    while (($line = fgets($source2)) !== false) {
        fwrite($target, $line);
    }



    fclose($source1);
    fclose($source2);
    fclose($target);
}


