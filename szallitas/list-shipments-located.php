<?php

// tömbök deffiniálása
$index = [];
$szallitasok = [];

// adatok kiolvasása fájlból, "$index" feltöltése
$fp = fopen("szallitasok", "r");

while (($lines = fgets($fp)) !== false) {
    $index[] = trim($lines);
}

fclose($fp);

// "$szállítások" tömb feltöltése
for ($x = 0; $x < count($index); $x += 7) {
    $szallitasok[] = [
        "honnan" => $index[$x],
        "felMikor" => strtotime($index[$x + 1]),
        "felIdo" => $index[$x + 2] * 60,
        "hova" => $index[$x + 3],
        "leMikor" => strtotime($index[$x + 4]),
        "leIdo" => $index[$x + 5] * 60,
        "rendszam" => $index[$x + 6]
    ];
}

unset($index);
$index = [];
// "$index" segédtömb feltöltése
for ($x = 0; $x < count($szallitasok); $x++) {
    if ($argv[1] == $szallitasok[$x]["honnan"]) {
        $index[] = [
            "honnan" => $szallitasok[$x]["honnan"],
            "mikor" => $szallitasok[$x]["felMikor"],
            "ido" => $szallitasok[$x]["felIdo"],
            "hova" => $szallitasok[$x]["hova"],
            "rendszam" => $szallitasok[$x]["rendszam"]
        ];
    }
    if ($argv[1] == $szallitasok[$x]["hova"]) {
        $index[] = [
            "honnan" => $szallitasok[$x]["honnan"],
            "mikor" => $szallitasok[$x]["leMikor"],
            "ido" => $szallitasok[$x]["leIdo"],
            "hova" => $szallitasok[$x]["hova"],
            "rendszam" => $szallitasok[$x]["rendszam"]
        ];
    } 
}

// "$index" segédtömb időszerinti sorbaállítása
for ($x = 0; $x < count($index) - 1; $x++) {
    for ($y = $x + 1; $y < count($index); $y++) {
        $temp = "";
        if ($index[$y]["mikor"] < $index[$x]["mikor"]) {
            $temp = $index[$x];
            $index[$x] = $index[$y];
            $index[$y] = $temp;
        } else {
            continue;
        }
    }
}
// lekérdezés kilistázása
for ($x = 0; $x < count($index); $x++) {
    if ($argv[1] == $index[$x]["honnan"]) {
        echo "OUT > " . $index[$x]["hova"] . " @" . trim(date("Y.m.d H:i", $index[$x]["mikor"])) . " - " . trim(date("Y.m.d H:i", $index[$x]["mikor"] + $index[$x]["ido"])) . " w\\ " . $index[$x]["rendszam"] . "\n";
    }
    if ($argv[1] == $index[$x]["hova"]) {
        echo "IN < " . $index[$x]["honnan"] . " @" . trim(date("Y.m.d H:i", $index[$x]["mikor"])) . " - " . trim(date("Y.m.d H:i", $index[$x]["mikor"] + $index[$x]["ido"])) . " w\\ " . $index[$x]["rendszam"] . "\n";
    } else {
        continue;
    }
}
