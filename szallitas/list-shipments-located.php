<?php

// tömbök deffiniálása
$szallitasok = [];
$index = [];
$index2 = [];

// véltozók deffiniálása
$opposite = "";
$time = "";
$plate = "";

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

// "$index" segédtömb feltöltése
unset($index);
$index = [];

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
//print_r($index);

// paraméterek vizsgálata, deffiniálása
for ($x = 0; $x < count($argv); $x++) {
    if (substr($argv[$x], 0, 9) == "opposite=") {
        $opposite = substr($argv[$x], 9);
    }
    if (substr($argv[$x], 0, 5) == "time=") {
        $time = strtotime(substr($argv[$x], 5));
    }
    if (substr($argv[$x], 0, 6) == "plate=") {
        $plate = substr($argv[$x], 6);
    }
}

// "$index2" segédtömb feltöltése
for ($x = 0; $x < count($index); $x++) {
    if (    
            $argv[1] == $index[$x]["honnan"] &&
            $opposite == $index[$x]["hova"] &&
            $time >= $index[$x]["mikor"] &&
            $time <= $index[$x]["mikor"] + $index[$x]["ido"] &&
            $plate == $index[$x]["rendszam"]
    ) {
        $index2[] = [
            "honnan" => $index[$x]["honnan"],
            "mikor" => $index[$x]["mikor"],
            "ido" => $index[$x]["ido"],
            "hova" => $index[$x]["hova"],
            "rendszam" => $index[$x]["rendszam"]
        ];
    }
    if (
            $argv[1] == $index[$x]["hova"] &&
            $opposite == $index[$x]["honnan"] &&
            $time >= $index[$x]["mikor"] &&
            $time <= $index[$x]["mikor"] + $index[$x]["ido"] &&
            $plate == $index[$x]["rendszam"]
    ) {
        $index2[] = [
            "honnan" => $index[$x]["honnan"],
            "mikor" => $index[$x]["mikor"],
            "ido" => $index[$x]["ido"],
            "hova" => $index[$x]["hova"],
            "rendszam" => $index[$x]["rendszam"]
        ];
    }
}
print_r($index2);
//------------------------------------------------------------------------------
// "$index2" segédtömb időszerinti sorbaállítása
for ($x = 0; $x < count($index2) - 1; $x++) {
    for ($y = $x + 1; $y < count($index2); $y++) {
        $temp = "";
        if ($index2[$y]["mikor"] < $index2[$x]["mikor"]) {
            $temp = $index2[$x];
            $index2[$x] = $index2[$y];
            $index2[$y] = $temp;
        } else {
            continue;
        }
    }
}
// lekérdezés kilistázása
for ($x = 0; $x < count($index2); $x++) {
    if ($argv[1] == $index2[$x]["honnan"]) {
        echo "OUT > " . $index2[$x]["hova"] . " @" . trim(date("Y.m.d H:i", $index2[$x]["mikor"])) . " - " . trim(date("Y.m.d H:i", $index2[$x]["mikor"] + $index2[$x]["ido"])) . " w\\ " . $index2[$x]["rendszam"] . "\n";
    }
    if ($argv[1] == $index2[$x]["hova"]) {
        echo "IN < " . $index2[$x]["honnan"] . " @" . trim(date("Y.m.d H:i", $index2[$x]["mikor"])) . " - " . trim(date("Y.m.d H:i", $index2[$x]["mikor"] + $index2[$x]["ido"])) . " w\\ " . $index2[$x]["rendszam"] . "\n";
    } else {
        continue;
    }
}
