<?php
echo "\n";
$inputFileName = readline("Input the file name to be opened: ");

$fp = fopen("$inputFileName", "r");

echo "\nThe content of the file " . $inputFileName . " are:\n\n";
$lineQuantity = 0;
if ($fp) {
 while (($line = fgets($fp)) !== false) {
 echo $line;
 $lineQuantity = $lineQuantity+1;
 }
 if (!feof($fp)) {
 echo "Error: unexpected fgets() fail\n";
 }
 echo "\nThe lines in the file are: " . $lineQuantity . "\n";
 fclose($fp);
}






























