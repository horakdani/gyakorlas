<?php

$firstFile = readline("Input the 1st file name: ");
$secondFile = readline("Input the 2nd file name: ");
$newFile = readline("Input the new file name where to merge the above two files: ");

$fpFirstFile = fopen($firstFile, "r") or die("can't open the file");
$fpSecondFile = fopen($secondFile, "r") or die("can't open the file");
$fpNewFile = fopen($newFile, "w") or die("can't open the file");

if ($fpFirstFile) {
    while (($line = fgets($fpFirstFile)) !== false) {
        fwrite($fpNewFile, $line);
    }
    if (!feof($fpFirstFile)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($fpFirstFile);
}

if ($fpSecondFile) {
    while (($line = fgets($fpSecondFile)) !== false) {
        fwrite($fpNewFile, $line);
    }
    if (!feof($fpSecondFile)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($fpSecondFile);
}

fclose($fpNewFile);

echo "The content of the " . $newFile . " is:";
$fp = fopen($newFile, "r") or die("can't open the file");
if ($fp) {
    while (($line = fgets($fp)) !== false) {
        echo $line;
    }
    if (!feof($fp)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($fp);
}


