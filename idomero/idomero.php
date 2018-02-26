<?php

$fp = fopen("ugymenetek", "r");
 
// Add case and timestap to storage file from argument
if ($argc === 2) {
    $current = file_get_contents("ugymenetek");
    $current .= $argv[1] . " " . time() . "\n";
    file_put_contents("ugymenetek", $current);
}

//------------------------------------------------------
$cases = [];
fseek($fp, 0);

while (fscanf($fp, "%s %d", $case, $timeStamp)) {
    if (isCaseRecorded($cases, $case)) {
        $cases[$case] = $timeStamp - $cases[$case];
    } else {
        $cases[$case] = $timeStamp;
    } 
}

//------------------------------------------------------
fclose($fp);

print_r($cases);

//--------------functions-------------------------------
function isCaseRecorded($cases, $case) {
    foreach ($cases as $key => $value) {
        if ($key === $case) {
            return true;
        }
    }
    return false;
}