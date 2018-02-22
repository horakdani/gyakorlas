<?php

$inputFileName = readline("Input the file name to be opened: ");
$newLineNumbers = readline("Input the number of lines to be written: ");

$fpOriginal = fopen($inputFileName, "r") or die("can't open the file");
$fpTemporary = fopen("testFileTemporary.txt", "w") or die("can't open the file");

while (feof($fpOriginal) !== TRUE) {
    fwrite($fpTemporary, fgets($fpOriginal));
}

for ($i = 1; $i <= $newLineNumbers; $i++) {
    $newLines = readline("new line " . $i . ": ");
    fwrite($fpTemporary, "\n" . $newLines);
}

fclose($fpOriginal);
fclose($fpTemporary);

unlink("testFile.txt");
rename("testFileTemporary.txt", "testFile.txt");

echo "The content of the " . $inputFileName . " is:";
$fp = fopen("testFile.txt", "r");
if ($fp) {
    while (($line = fgets($fp)) !== false) {
        echo $line;
    }
    if (!feof($fp)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($fp);
}










