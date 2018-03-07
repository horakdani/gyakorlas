<?php

for ($x = 0; $x < count($argv); $x++){
    if (substr($argv[$x], 0, 9) == "opposite="){
        echo "opposite: " .substr($argv[$x], 9) . "\n";
    }
    if (substr($argv[$x], 0, 6) == "plate="){
        echo "plate: " . substr($argv[$x], 6) . "\n";
    }
    if (substr($argv[$x], 0, 5) == "time="){
        echo "time: " . substr($argv[$x], 5) . "\n";
    }
}