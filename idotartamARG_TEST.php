<?php

function assertEquals($a, $b) {
    if ($a == $b) {
        echo "OK";
    } else {
        echo "FAIL";
    }
}

assertEquals(`php idotartamARG.php 1 5 0 1 10 0`, "Az első időtratamnak nagyobbnak kell lennie, mint a másodiknak! De egyébként a különbség: -300 másodperc");

