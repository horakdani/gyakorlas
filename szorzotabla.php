<?php

$N = readline("Adj meg egy számot, amit szorzótáblává alakíthatok: ");
$i = 1;

echo "   |";

for ($i=1; $i <= $N; $i++ ) {
    if ($i < 10) {
        echo "     " . $i;        
    } else {
        echo "    " . $i; 
    }
    
}

echo "\n";
echo "---+";

for ($i=1; $i <= $N; $i++ ) {
    if ($i < 10) {
        echo "------";
    } else {
        echo "-------";
    }
        
}

echo "\n";

for ($i = 1; $i <= $N; $i++) {
    if ($i < 10) {
    echo "  " . $i . "|";
    } else {
        echo " " . $i . "|";
    }    
    
    for ($k = 1; $k <= $N; $k++) {
        if (($i * $k) < 10) {
        echo "     " . ($i * $k);
        }
        
        if (($i * $k) >= 10) {
        echo "    " . ($i * $k);
        }
        

    }
    echo "\n";
}

