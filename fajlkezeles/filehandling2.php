<?php

$fp = fopen("testFile.txt", "r");
if ($fp === false) {
 echo "Error: Unable to open file\n";
 die(1);
}

echo fgets($fp);

fclose($fp);