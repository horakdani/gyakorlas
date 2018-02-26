<?php

$date = new DateTime();
$date = $date->format("20y.m.d. D");

$isDate = true;

$fp = fopen("ugymenetek", "r");

while (($lines = fgets($fp)) !== false) {
    if ($lines === $date){
        $isDate = false;        
    }
}

fclose($fp);

if ($isDate){
    $current = file_get_contents("ugymenetek");
    $current .= $date . "\n";
    file_put_contents("ugymenetek", $current);
    
}