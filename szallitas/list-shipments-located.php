<?php

// tömbök deffiniálása
$segedTomb = [];
$szallitasok = [];
$keresett = [];

// adatok kiolvasása fájlból
$fp = fopen("szallitasok", "r");

while (($lines = fgets($fp)) !== false) {
    $segedTomb[] = trim($lines);
}

fclose($fp);

// "$szállítások" tömb feltöltése
for ($x = 0; $x < count($segedTomb); $x += 7) {
    $szallitasok[] = [
        "honnan" => $segedTomb[$x],
        "felMikor" => strtotime($segedTomb[$x + 1]),
        "felIdo" => $segedTomb[$x + 2] * 60,
        "hova" => $segedTomb[$x + 3],
        "leMikor" => strtotime($segedTomb[$x + 4]),
        "leIdo" => $segedTomb[$x + 5] * 60,
        "rendszam" => $segedTomb[$x + 6]
    ];
}

// "$keresett" segédtömb feltöltése
for ($x = 0; $x < count($szallitasok); $x++) {
    if ($argv[1] == $szallitasok[$x]["honnan"]) {
        $keresett[$x] = [
            "honnan" => $szallitasok[$x]["honnan"],
            "mikor" => $szallitasok[$x]["felMikor"],
            "ido" => $szallitasok[$x]["felIdo"],
            "hova" => $szallitasok[$x]["hova"],
            "rendszam" => $szallitasok[$x]["rendszam"]
        ];
    }
    if ($argv[1] == $szallitasok[$x]["hova"]) {
        $keresett[$x] = [
            "honnan" => $szallitasok[$x]["honnan"],
            "mikor" => $szallitasok[$x]["leMikor"],
            "ido" => $szallitasok[$x]["leIdo"],
            "hova" => $szallitasok[$x]["hova"],
            "rendszam" => $szallitasok[$x]["rendszam"]
        ];
    } else {
        continue;
    }
}
// "$keresett" segédtömb időszerinti sorbaállítása
for ($x = 0; $x < count($keresett) - 1; $x++) {
    $temp = 0;
    if ($keresett[$x + 1]["mikor"] < $keresett[$x]["mikor"]) {
        $temp = $keresett[$x];
        $keresett[$x] = $keresett[$x + 1];
        $keresett[$x + 1] = $temp;
    } else {
        continue;
    }
}

// lekérdezés kilistázása
for ($x = 0; $x < count($szallitasok) - 1; $x++) {
    if ($argv[1] == $keresett[$x]["honnan"]) {
        echo "OUT > " . $keresett[$x]["hova"] . " @" . trim(date("Y.m.d H:i", $keresett[$x]["mikor"])) . " - " . trim(date("Y.m.d H:i", $keresett[$x]["mikor"] + $keresett[$x]["ido"])) . " w\\ " . $keresett[$x]["rendszam"] . "\n";
    }
    if ($argv[1] == $keresett[$x]["hova"]) {
        echo "IN < " . $keresett[$x]["honnan"] . " @" . trim(date("Y.m.d H:i", $keresett[$x]["mikor"])) . " - " . trim(date("Y.m.d H:i", $keresett[$x]["mikor"] + $keresett[$x]["ido"])) . " w\\ " . $keresett[$x]["rendszam"] . "\n";
    } else {
        continue;
    }
}
