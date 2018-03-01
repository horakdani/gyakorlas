<?php

$caseNames = [];
$caseTimeStamps = [];
$caseTimes = [];
$summary = [];

if ($argc == 2 && $argv[1] == "break") {
    $fp = fopen("ugymenetek", "a");
    fwrite($fp, $argv[1] . " " . time() . "\n");
    fclose($fp);
} elseif ($argc == 2 && $argv[1] == "end") {
    $fp = fopen("ugymenetek", "a");
    fwrite($fp, $argv[1] . " " . time() . "\n");
    fclose($fp);
} elseif ($argc == 2 && $argv[1] !== "query") {
    $fp = fopen("ugymenetek", "a");
    fwrite($fp, $argv[1] . " " . time() . "\n");
    fclose($fp);
}
//----------------------------------------------------------------

$fp = fopen("ugymenetek", "r");

while (fscanf($fp, "%s %d", $case, $timeStamp)) {
    $caseNames[] = $case;
    $caseTimeStamps[] = $timeStamp;
}

for ($x = 0; $x < count($caseTimeStamps) - 1; $x++) {
    $caseTimes[] = $caseTimeStamps[$x + 1] - $caseTimeStamps[$x];
}

for ($x = 0; $x < count($caseNames); $x++) {
    for ($y = $x + 1; $y < count($caseNames) - 1; $y++) {
        if ($caseNames[$x] === $caseNames[$y]) {
            $caseTimes[$x] += $caseTimes[$y];
            $caseTimes[$y] = 0;
        }
    }
}

fclose($fp);
//----------------------------------------------------------------

if ($argc === 2 && $argv[1] == "query") {
    for ($x = 0; $x < count($caseTimes); $x++) {
        if ($caseTimes[$x] !== 0 && $caseNames[$x] !== "end") {
            $summary += array($caseNames[$x] => $caseTimes[$x]);
        }
    }
    print_r($summary);
}