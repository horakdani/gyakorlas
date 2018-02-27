<?php

$caseNames = [];
$caseTimeStamps = [];
$caseTimes = [];
$summary = [];

if ($argc === 2 && $argv[1] == "break") {
    $current = file_get_contents("ugymenetek");
    $current .= "BREAK -" . " : " . time() . "\n";
    file_put_contents("ugymenetek", $current);
} elseif ($argc === 2 && $argv[1] == "end") {
    $current = file_get_contents("ugymenetek");
    $current .= "END -" . " : " . time() . "\n";
    file_put_contents("ugymenetek", $current);
} elseif ($argc == 2 && $argv[1] !== "query") {
    $current = file_get_contents("ugymenetek");
    $current .= "CASE " . $argv[1] . " : " . time() . "\n";
    file_put_contents("ugymenetek", $current);
}

$fp = fopen("ugymenetek", "r");

while (fscanf($fp, "%s %s : %d", $type, $case, $timeStamp)) {
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

if ($argc === 2 && $argv[1] == "query") {
    for ($x = 0; $x < count($caseTimes); $x++) {
        if ($caseTimes[$x] !== 0 && $caseNames[$x] !== "end") {
            $summary += array($caseNames[$x] => $caseTimes[$x]);
        }
    }
    print_r($summary);
}

fclose($fp);