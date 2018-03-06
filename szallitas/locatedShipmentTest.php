#!/usr/bin/env php
<?php
recordShipment("Acme Co.
2018-03-14 18:30
30
Smith Facility
2018-03-19 08:00
20
KDU-654");

recordShipment("Golden Road Electronics
2018-03-13 09:45
20
Acme Co.
2018-03-13 12:30
40
FES-442");

recordShipment("Silver Lining Navigations
2018-03-07 19:00
45
Hatchworks
2018-03-08 11:15
45
HJT-941");

$expectedOut = 'OUT > Smith Facility @2018.03.14 18:30 - 2018.03.14 19:00 w\ KDU-654
IN < Golden Road Electronics @2018.03.13 12:30 - 2018.03.13 13:10 w\ FES-442';

$out = trim(`php list-shipments-located.php "Acme Co."`);

echo ($out == $expectedOut ? "OK" : "FAIL") . "\n";

function recordShipment($shipment) {
	file_put_contents("test", $shipment);
	`php record-shipment.php < test`;
	unlink("test");
}
