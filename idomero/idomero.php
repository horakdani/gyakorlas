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
}


// Add date if it is a new day
if ($isDate) {
    $current = file_get_contents("ugymenetek");
    $current .= "\n" . $date . "\n";
    file_put_contents("ugymenetek", $current);
} 

// Add case and timestap to storage file from argument
if ($argc === 2) {
    $current = file_get_contents("ugymenetek");
    $current .= $argv[1] . " " . time() . "\n";
    file_put_contents("ugymenetek", $current);
}

//------------------------------------------------------
$cases = [];
fseek($fp, 0);
while (fscanf($fp, "%s %d", $case, $timeStamp) && $case != "lezar") {
	if (isCaseRecorded($cases, $case)) {
		$cases[$case] += $timeStamp;
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