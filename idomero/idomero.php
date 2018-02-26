<?php

// Date check. Are we started the day today?
$date = new DateTime();
$date = $date->format("20y.m.d. D");

$isDate = true;

$fp = fopen("ugymenetek", "r");

while (($lines = fgets($fp)) !== false) {
    if ($lines === $date . "\n") {
        $isDate = false;
    }
    echo $isDate;
}

fclose($fp);

if ($isDate) {
    $current = file_get_contents("ugymenetek");
    $current .= $date . "\n";
    file_put_contents("ugymenetek", $current);
} else {
    $current = file_get_contents("ugymenetek");
    file_put_contents("ugymenetek", $current);
    
}

// Add case and timestap to storage file
if ($argc === 2) {
    $current = file_get_contents("ugymenetek");
    $current .= $argv[1] . "\t" . time() . "\n";
    file_put_contents("ugymenetek", $current);
}