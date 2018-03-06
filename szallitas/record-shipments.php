<?php

// adatok bekérése
echo "\n";
$honnan = readline("Add meg a szállítás kiinduló pontjának nevét (pl.: Acme Co.): ");
echo "\n";
$felMikor = readline("Add meg a felrakodás kezdetének időpontját (pl. 2018-03-14 08:30): ");
echo "\n";
$felIdo = readline("Add meg a felrakodás idejét percben (pl.: 30): ");
echo "\n";
$hova = readline("Add meg a szállítás célpontjának nevét (pl.: Smith Facility): ");
echo "\n";
$leMikor = readline("Add meg a lerakodás kezdetének idejét (pl.: 2018-03-19 16:15): ");
echo "\n";
$leIdo = readline("Add meg a lerakodás idejét percben (pl.: 20): ");
echo "\n";
$rendszam = readline("Add meg a szállító jármű rendszámát (pl.: KDU-654): ");
echo "\n";

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

//időpontok ellenőrzése
for ($x = 0; $x < count($szallitasok); $x++) {
    if (strtotime($felMikor) + ($felIdo * 60) >= $szallitasok[$x]["felMikor"] &&
            strtotime($felMikor) <= $szallitasok[$x]["felMikor"] + $szallitasok[$x]["felIdo"] &&
            $szallitasok[$x]["felMikor"] >= strtotime($felMikor) &&
            $szallitasok[$x]["felMikor"] <= strtotime($felMikor) + ($felIdo * 60)) {
        echo strtoupper("A megadott FELrakodási időpont egybeesik egy már rögzített időponttal!\n\n");
        $le = readline("Visszavonja a szállítás rögzítését? (i/n): ");
        if ($le == "i") {
            die(strtoupper("\nA szállítás visszavonva!\n"));
        } else {
            continue;
        }
    }
    if (strtotime($leMikor) + ($leIdo * 60) >= $szallitasok[$x]["leMikor"] &&
            strtotime($leMikor) <= $szallitasok[$x]["leMikor"] + $szallitasok[$x]["leIdo"] &&
            $szallitasok[$x]["leMikor"] >= strtotime($leMikor) &&
            $szallitasok[$x]["leMikor"] <= strtotime($leMikor) + ($leIdo * 60)) {
        echo strtoupper("A megadott LErakodási időpont egybeesik egy már rögzített időponttal!\n\n");
        $le = readline("Visszavonja a szállítás rögzítését? (i/n): ");
        if ($le == "i") {
            die(strtoupper("\nA szállítás visszavonva!\n"));
        } else {
            continue;
        }
    }
}

//collisions($felMikor, $felIdo, $leMikor, $leIdo, $szallitasok);
// fájl feltöltése adatokkal
$fp = fopen("szallitasok", "a");
fwrite($fp, "$honnan\n");
fwrite($fp, "$felMikor\n");
fwrite($fp, "$felIdo\n");
fwrite($fp, "$hova\n");
fwrite($fp, "$leMikor\n");
fwrite($fp, "$leIdo\n");
fwrite($fp, "$rendszam\n");
fclose($fp);

//------------------------------ function --------------------------------------
//function collisions($felMikor, $felIdo, $leMikor, $leIdo, $szallitasok) {
//    for ($x = 0; $x < count($szallitasok); $x++) {
//        if ((strtotime($felMikor) + ($felIdo * 60) >= $szallitasok[$x]["felMikor"] &&
//                strtotime($felMikor) <= $szallitasok[$x]["felMikor"] + $szallitasok[$x]["felIdo"] &&
//                $szallitasok[$x]["felMikor"] >= strtotime($felMikor) &&
//                $szallitasok[$x]["felMikor"] <= strtotime($felMikor) + ($felIdo * 60)) ||
//                (strtotime($leMikor) + ($leIdo * 60) >= $szallitasok[$x]["leMikor"] &&
//                strtotime($leMikor) <= $szallitasok[$x]["leMikor"] + $szallitasok[$x]["leIdo"] &&
//                $szallitasok[$x]["leMikor"] >= strtotime($leMikor) &&
//                $szallitasok[$x]["leMikor"] <= strtotime($leMikor) + ($leIdo * 60))) {
//            echo strtoupper("A megadott fel, vagy lerakodási időpont egybeesik egy már rögzített időponttal!\n\n");
//            $warning = readline("Visszavonja a szállítás rögzítését? (i/n): ");
//            if ($warning == "i") {
//                die(strtoupper("\nA szállítás visszavonva!\n"));
//            } else {
//                continue;
//            }
//        }
//    }
//}

//--------------- Zsolt megoldása a tömb feltöltésére --------------------------
//$shipments = [];
//
//
//while(($shipment = readShipment($fp)) != false){
//    $shipments[] = $shipment;
//}
//
//
//function readShipment($fp) {
//    $packname = fgets($fp);
//    if($packname === false){
//        return false;
//    }
//
//    return [
//        "packName" => $packname,
//        "packDate" => fgets($fp),
//        "packDuration" => (int) fgets($fp) * 60,
//
//        "lognName" => fgets($fp),
//        "lognDate" => fgets($fp),
//        "lognDuration" => (int) fgets($fp) * 60,
//
//        "plateNumber" => fgets($fp)
//    ];
//}
