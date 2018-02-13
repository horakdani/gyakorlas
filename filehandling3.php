<?php

$lineNumber = readline("Lines to be written: ");

$fp = fopen("testFile.txt", "w");
if ($fp === false) {
    echo "Error: Unable to open file \n";
    die(1);
}

for ($i=1; $i <= $lineNumber; $i++){
    $line = readline("line " . $i . ": ");
    fwrite($fp, $line . "\n");
}
echo "\nThe content of the file test.txt is:\n";

$fp = fopen("testFile.txt", "r");
if ($fp) {
 while (($line = fgets($fp, $lineNumber)) !== false) {
 echo $line;
 }
 if (!feof($fp)) {
 echo "Error: unexpected fgets() fail\n";
 }
 fclose($fp);
}























