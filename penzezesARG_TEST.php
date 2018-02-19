<?php
echo "\n";
echo "Test all the money in your wallet if you have 5 piece of 100 HUF, 6 piece of 200 HUF and 1 pieco of 500 HUF\n\n";
//-----------------------------------------------------------------
echo "Read data from parameters:\t\t";
if (`php penzezesARG.php 5 6 1` == "A pénztár teljes összege: 2200Ft"){
    echo "OK!";
}
//----------------------------------------------------------------
$fp = fopen("money", "w");
fwrite($fp, "5\n6\n1");
fclose($fp);

echo "\nRead data from STDIN:\t\t\t";


assertEquals(`php penzezesARG.php -- < money`, "A pénztár teljes összege: 2200Ft");

function assertEquals($a, $b) {
    if ($a == $b) {
        echo "OK";
    } else {
        echo "FAIL";
    }
}