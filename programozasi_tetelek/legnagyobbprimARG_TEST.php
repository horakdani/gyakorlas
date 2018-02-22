<?php

echo "Test biggest prime to number 500:\t\t";

//    assert(`php legnagyobbprimARG.php 500` == "499");
    assertEquals(`php legnagyobbprimARG.php 500`, "499");

echo "\n";

echo "Test biggest prime to number 500 from STDIN:\t";

    $fp = fopen("primetest", "w");
    fwrite($fp, "500");
    fclose($fp);

    assertEquals(`php legnagyobbprimARG.php -- < primetest`, "499");

echo "\n";

function assertEquals($a, $b) {
//    assert($a == $b);
    if ($a == $b) {
        echo "OK";
    } else {
        echo "FAIL";
    }
}

//function assert($expectation) {
//    if ($expectation) {
//        echo "OK";
//    } else {
//        echo "FAIL";
//    }
//}

unlink("primetest");
