<?php
$content = readline("Töltsd fel a fájlt tartalommal: ");

$fp = fopen("testFile.txt", "w");
if ($fp === false) {
 echo "Error: Unable to open file\n";
 die(1);
}

fwrite($fp, $content);
fclose($fp);
echo"A tesztfájl sikeresen létrejött!";



