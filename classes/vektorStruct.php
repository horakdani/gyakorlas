<?php

echo "\n";
$x1S = readline("Első vektor kezdőpont X koordinátája: ");
$y1S = readline("Első vektor kezdőpont Y koordinátája: ");
$x1E = readline("Első vektor végpont X koordinátája: ");
$y1E = readline("Első vektor végpont Y koordinátája: ");
echo "\n";
$x2S = readline("Második vektor kezdőpont X koordinátája: ");
$y2S = readline("Második vektor kezdőpont Y koordinátája: ");
$x2E = readline("Második vektor végpont X koordinátája: ");
$y2E = readline("Második vektor végpont Y koordinátája: ");

$vektor1 = create($x1S, $y1S, $x1E, $y1E);
$vektor2 = create($x2S, $y2S, $x2E, $y2E);

echo "\nA két vektor összege: " . toString(summation($vektor1, $vektor2)) . "\n";

$multiplication = multiplication($vektor1, $vektor2);
echo "\nA két vektor skaláris szorzata: " . multiplication($vektor1, $vektor2) . "\n";

$opposite = opposite($vektor1);
echo "\nA vektor 1 ellentettje: " . toString(opposite($vektor1)) . "\n";

// függvények ------------------------------------------------------------------
function create($xS, $yS, $xE, $yE) {
    return [
        "xStart" => $xS,
        "yStart" => $yS,
        "xEnd" => $xE,
        "yEnd" => $yE
    ];
}

function summation($vektor1, $vektor2) {
    $a = $vektor1["xEnd"] + ($vektor2["xEnd"] - $vektor2["xStart"]);
    $b = $vektor1["yEnd"] + ($vektor2["yEnd"] - $vektor2["yStart"]);

    return create($vektor1["xStart"], $vektor1["yStart"], $a, $b);
}

function multiplication($vektor1, $vektor2) {
    $v1xHely = $vektor1["xEnd"] - $vektor1["xStart"];
    $v1yHely = $vektor1["yEnd"] - $vektor1["yStart"];
    $v2xHely = $vektor2["xEnd"] - $vektor2["xStart"];
    $v2yHely = $vektor2["yEnd"] - $vektor2["yStart"];

    return $v1xHely * $v2xHely + $v1yHely * $v2yHely;
}

function opposite($vektor) {
    $xStart = $vektor["xStart"];
    $yStart = $vektor["yStart"];
    $xEnd = $vektor["xStart"] - ($vektor["xEnd"] - $vektor["xStart"]);
    $yEnd = $vektor["yStart"] - ($vektor["yEnd"] - $vektor["yStart"]);

    return create($xStart, $yStart, $xEnd, $yEnd);
}

function toString($vector) {
    return $vector["xStart"] . ", " . $vector["yStart"] . ", " . $vector["xEnd"] . ", " . $vector["yEnd"];
}
