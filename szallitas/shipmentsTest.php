#!/usr/bin/env php
<?php
recordShipment("Acme Co.
2018-03-14 18:30
30
Smith Facility
2018-03-19 08:00
20
KDU-654");

recordShipment("Acme Co.
2018-03-13 09:45
20
Golden Road Electronics
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

$expectedOut = 'Acme Co. -> Smith Facility w\ KDU-654
@Acme Co. 2018.03.14 18:30 - 2018.03.14 19:00
@Smith Facility 2018.03.19 08:00 - 2018.03.19 08:20

Acme Co. -> Golden Road Electronics w\ FES-442
@Acme Co. 2018.03.13 09:45 - 2018.03.13 10:05
@Golden Road Electronics 2018.03.13 12:30 - 2018.03.13 13:10

Silver Lining Navigations -> Hatchworks w\ HJT-941
@Silver Lining Navigations 2018.03.07 19:00 - 2018.03.07 19:45
@Hatchworks 2018.03.08 11:15 - 2018.03.08 12:00';

$out = trim(`php list-shipments.php`);

echo ($out == $expectedOut ? "OK" : "FAIL") . "\n";

function recordShipment($shipment) {
	file_put_contents("test", $shipment);
	`php record-shipment.php < test`;
	unlink("test");
}
