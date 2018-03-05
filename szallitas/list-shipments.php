<?php
// tömbök deffiniálása
$segedTomb = [];
$szallitasok = [];

// adatok kiolvasása fájlból
$fp = fopen("szallitasok", "r");

while (($lines = fgets($fp)) !== false) {
    $segedTomb[] = trim($lines);
}

fclose($fp);

// szállítások tömb feltöltése
for ($x = 0; $x < count($segedTomb); $x += 7) {
    $szallitasok[] = ["honnan" => $segedTomb[$x],
        "felMikor" => strtotime($segedTomb[$x + 1]),
        "felIdo" => $segedTomb[$x + 2] * 60,
        "hova" => $segedTomb[$x + 3],
        "leMikor" => strtotime($segedTomb[$x + 4]),
        "leIdo" => $segedTomb[$x + 5] * 60,
        "rendszam" => $segedTomb[$x + 6]
    ];
}

// display results
for ($x = 0; $x < count($szallitasok); $x++){
    echo trim($szallitasok[$x]["honnan"]) . " -> " . trim($szallitasok[$x]["hova"]) . " w\\ " . trim($szallitasok[$x]["rendszam"]) . "\n";
    echo "@" . trim($szallitasok[$x]["honnan"]) . " " . trim(date("Y.m.d H:i", $szallitasok[$x]["felMikor"])) . " - " . trim(date("Y.m.d H:i", $szallitasok[$x]["felMikor"] + $szallitasok[$x]["felIdo"])) . "\n";
    echo "@" . trim($szallitasok[$x]["hova"]) . " " . trim(date("Y.m.d H:i", $szallitasok[$x]["leMikor"])) . " - " . trim(date("Y.m.d H:i", $szallitasok[$x]["leMikor"] + $szallitasok[$x]["leIdo"])) . "\n\n";
}