<?php

// adatok bekérése
$honnan = readline("Add meg a szállítás kiinduló pontjának nevét (pl.: Acme Co.): ");
$felMikor = readline("Add meg a felrakodás kezdetének időpontját (pl. 2018-03-14 08:30): ");
$felIdo = readline("Add meg a felrakodás idejét percben (pl.: 30): ");
$hova = readline("Add meg a szállítás célpontjának nevét (pl.: Smith Facility): ");
$leMikor = readline("Add meg a lerakodás kezdetének idejét (pl.: 2018-03-19 16:15): ");
$leIdo = readline("Add meg a lerakodás idejét percben (pl.: 20): ");
$rendszam = readline("Add meg a szállító jármű rendszámát (pl.: KDU-654): ");

// tömbök deffiniálása
$segedTomb = [];
$szallitasok = [];

// adatok kiolvasása fájlból
if (file_exists("szallitasok")) {
    $fp = fopen("szallitasok", "r");
    while (($lines = fgets($fp)) !== false) {
        $segedTomb[] = trim($lines);
    }
    fclose($fp);
}

// szállítások tömb feltöltése
for ($x = 0; $x < count($segedTomb); $x += 7) {
    $szallitas = new Szallitas();
    $szallitas->loadFromArray($segedTomb, $x);
    $szallitasok[] = $szallitas;
}
//időpontok ellenőrzése
for ($x = 0; $x < count($szallitasok); $x++) {
    if ($szallitasok[$x]->isFelIdoConflict(strtotime($felMikor), strtotime($felMikor) + ($felIdo * 60))) {
        echo strtoupper("A megadott FELrakodási időpont egybeesik egy már rögzített időponttal!\n\n");
        $le = readline("Visszavonja a szállítás rögzítését? (i/n): ");
        if ($le == "i") {
            die(strtoupper("\nA szállítás visszavonva!\n"));
        } else {
            continue;
        }
    }
    if ($szallitasok[$x]->isLeIdoConflict(strtotime($leMikor), strtotime($leMikor) + ($leIdo * 60))) {
        echo strtoupper("A megadott LErakodási időpont egybeesik egy már rögzített időponttal!\n\n");
        $le = readline("Visszavonja a szállítás rögzítését? (i/n): ");
        if ($le == "i") {
            die(strtoupper("\nA szállítás visszavonva!\n"));
        } else {
            continue;
        }
    }
}

// fájl feltöltése adatokkal

$szallitasTomb = [
    $honnan,
    $felMikor,
    $felIdo,
    $hova,
    $leMikor,
    $leIdo,
    $rendszam
];

$ujSzallitas = new Szallitas();
$ujSzallitas->loadFromArray($szallitasTomb, 0);
$ujSzallitas->writeToFile("szallitasok");
//------------------------------------------------------------------------------
class Szallitas {

    private $honnan;
    private $felMikor;
    private $felIdo;
    private $hova;
    private $leMikor;
    private $leIdo;
    private $rendszam;

    public function loadFromArray($segedTomb, $x) {
        $this->honnan = $segedTomb[$x];
        $this->felMikor = strtotime($segedTomb[$x + 1]);
        $this->felIdo = $segedTomb[$x + 2] * 60;
        $this->hova = $segedTomb[$x + 3];
        $this->leMikor = strtotime($segedTomb[$x + 4]);
        $this->leIdo = $segedTomb[$x + 5] * 60;
        $this->rendszam = $segedTomb[$x + 6];
    }

    public function isFelIdoConflict($start, $end) {
        return $start <= $this->felMikor + $this->felIdo &&
               $end >= $this->felMikor;
    }

    public function isLeIdoConflict($start, $end) {
        return $end >= $this->leMikor &&
               $start <= $this->leMikor + $this->leIdo;
    }

    public function writeToFile($filename) {
        $fp = fopen($filename, "a+");
        fwrite($fp, "$this->honnan\n");
        fwrite($fp, date("Y-m-d H:i", $this->felMikor) . "\n");
        fwrite($fp, ($this->felIdo / 60) . "\n");
        fwrite($fp, "$this->hova\n");
        fwrite($fp, date("Y-m-d H:i", $this->leMikor) . "\n");
        fwrite($fp, ($this->leIdo / 60) . "\n");
        fwrite($fp, "$this->rendszam\n");
        fclose($fp);
    }

}
