<?php

echo "\n";
$honnan = readline("Add meg a szállítás kiinduló pontjának nevét (pl.: Acme Co.): ");
echo "\n";
$felMikor = readline("Add meg a felrakodás kezdetének időpontját (pl. 2018-03-14 18:30): ");
echo "\n";
$felIdo = readline("Add meg a felrakodás idejét percben (pl.: 30): ");
echo "\n";
$hova = readline("Add meg a szállítás célpontjának nevét (pl.: Smith Facility): ");
echo "\n";
$leMikor = readline("Add meg a lerakodás kezdetének idejét (pl.: 2018-03-19 08:00): ");
echo "\n";
$leIdo = readline("Add meg a lerakodás idejét percben (pl.: 20): ");
echo "\n";
$rendszam = readline("Add meg a szállító jármű rendszámát (pl.: KDU-654): ");
echo "\n";

$fp = fopen("szallitasok", "a");
fwrite($fp, "$honnan\n");
fwrite($fp, "$felMikor\n");
fwrite($fp, "$felIdo\n");
fwrite($fp, "$hova\n");
fwrite($fp, "$leMikor\n");
fwrite($fp, "$leIdo\n");
fwrite($fp, "$rendszam\n");
fclose($fp);
