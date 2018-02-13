<?php

echo "\n";
echo "Delete a specific line from a file.";
$inputFileName = readline("Input the file name to be opened: ");
$lineRemove = readline("Input the line you want to remove: ");

$fpOriginal = fopen("$inputFileName", "r") or die("can't open the file");
$fpTemporary = fopen("testFileTemporary.txt", "w") or die("can't open the file");

$lineQuantity = 0;
while (feof($fpOriginal) !== TRUE) {
    $lineQuantity = $lineQuantity + 1;
    $lines = fgets($fpOriginal);
    if ($lineQuantity != $lineRemove) {
        fwrite($fpTemporary, $lines);
    }
}

fclose($fpOriginal);
fclose($fpTemporary);

unlink("testFile.txt");
rename("testFileTemporary.txt", "testFile.txt");

echo "The content of the file testFile.txt is:";
$fp = fopen("testFile.txt", "r");
if ($fp) {
 while (($line = fgets($fp)) !== false) {
 echo $line;
 }
 if (!feof($fp)) {
 echo "Error: unexpected fgets() fail\n";
 }
}

fclose($fp);




