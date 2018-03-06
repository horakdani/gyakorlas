<?php

//$query = readline("Add meg a lekérdezendő végpont nevét: ");

//------------------------------------------------------------------------------
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
//------------------------------------------------------------------------------
for ($x = 0; $x < count($szallitasok); $x++) {
    if ($argv[1] == $szallitasok[$x]["honnan"]) {
        echo "OUT > " . $szallitasok[$x]["hova"] . " @" . trim(date("Y.m.d H:i", $szallitasok[$x]["felMikor"])) . " - " . trim(date("Y.m.d H:i", $szallitasok[$x]["felMikor"] + $szallitasok[$x]["felIdo"])) . " w\\ " . $szallitasok[$x]["rendszam"] . "\n";
    }
    if ($argv[1] == $szallitasok[$x]["hova"]) {
        echo "IN < " . $szallitasok[$x]["honnan"] . " @" . trim(date("Y.m.d H:i", $szallitasok[$x]["leMikor"])) . " - " . trim(date("Y.m.d H:i", $szallitasok[$x]["leMikor"] + $szallitasok[$x]["leIdo"])) . " w\\ " . $szallitasok[$x]["rendszam"];
    } else {
        continue;
    }
}
