<?php

// tömbök deffiniálása
$szallitasok = [];
$index = [];
$index2 = [];

// véltozók deffiniálása
$opposite = 0;
$time = 1520539200;
$plate = 0;

// adatok kiolvasása fájlból, "$index" feltöltése
if (file_exists("szallitasok")) {
    $fp = fopen("szallitasok", "r");
    while (($lines = fgets($fp)) !== false) {
        $index[] = trim($lines);
    }
    fclose($fp);
}

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

// "$index2" tömb feltöltése
for ($x = 0; $x < count($index); $x++) {
    if (
            $argv[1] == $index[$x]["honnan"] &&
            $opposite == $index[$x]["hova"] &&
            $time >= $index[$x]["mikor"] &&
            $time <= $index[$x]["mikor"] + $index[$x]["ido"] &&
            $plate == $index[$x]["rendszam"]
    ) {
        $eredmeny = new index2();
        $eredmeny->loadFromIndex($index, $x);
        $index2[] = $eredmeny;
    }
    if (
            $argv[1] == $index[$x]["hova"] &&
            $opposite == $index[$x]["honnan"] &&
            $time >= $index[$x]["mikor"] &&
            $time <= $index[$x]["mikor"] + $index[$x]["ido"] &&
            $plate == $index[$x]["rendszam"]
    ) {
        $eredmeny = new index2();
        $eredmeny->loadFromIndex($index, $x);
        $index2[] = $eredmeny;
    }
}
print_r($index2);

//------------------------------------------------------------------------------
// "$index2" segédtömb időszerinti sorbaállítása
for ($x = 0; $x < count($index2) - 1; $x++) {
    for ($y = $x + 1; $y < count($index2); $y++) {
        $temp = "";
        if ($index2[$y]->timeComp($index2[$x])) {
            $temp = $index2[$x];
            $index2[$x] = $index2[$y];
            $index2[$y] = $temp;
        } else {
            continue;
        }
    }
}
print_r($index2);

//// lekérdezés kilistázása
for ($x = 0; $x < count($index2); $x++) {
    echo $index2[$x]->getDirection($argv[1]) . $index2[$x]->getOpposite($argv[1]) . " @";
    
    if ("IN < " == $index2[$x]->getDirection($argv[1])) {
        echo trim(date("Y.m.d H:i", $index2[$x]["mikor"])) . " - " . trim(date("Y.m.d H:i", $index2[$x]["mikor"] + $index2[$x]["ido"])) . " w\\ " . $index2[$x]["rendszam"] . "\n";
    } else {
        echo trim(date("Y.m.d H:i", $index2[$x]["mikor"])) . " - " . trim(date("Y.m.d H:i", $index2[$x]["mikor"] + $index2[$x]["ido"])) . " w\\ " . $index2[$x]["rendszam"] . "\n";
    }
}

//------------------------------------------------------------------------------
class Index2 {

    private $honnan;
    private $mikor;
    private $ido;
    private $hova;
    private $rendszam;

    public function loadFromIndex($index, $x) {
        $this->honnan = $index[$x]["honnan"];
        $this->mikor = $index[$x]["mikor"];
        $this->ido = $index[$x]["ido"];
        $this->hova = $index[$x]["hova"];
        $this->rendszam = $index[$x]["rendszam"];
    }

    public function timeComp($b) {
        return $this->mikor < $b->mikor;
    }

    public function getDirection($partner) {
        return $partner == $this->honnan ? "OUT > " : "IN < ";
    }
    public function getOpposite($partner) {
        return $partner == $this->honnan ? $this->hova : $this->honnan;
    }

    public function getHonnan() {
        return $this->honnan;
    }

    public function getMikor() {
        return $this->mikor;
    }

    public function getIdo() {
        return $this->ido;
    }

    public function getHova() {
        return $this->hova;
    }

    public function getRendszam() {
        return $this->rendszam;
    }

}
