<?php

$m = readline("Add meg az oszlopok számát: ");
$n = readline("Add meg a sorok számát: ");
$a = readline("Add meg a téglalap A méretét: ");
$b = readline("Add meg a téglalap B méretét: ");
$k = readline("Add meg a szóköz-sortörés távolságát: ");
echo "\n";

for ($l = 1; $l <= $n; $l++){
    for ($i = 1; $i <= $b; $i++){
        for ($col = 1; $col <= $m; $col++){    
            for ($o = 1; $o <= $a; $o++) {
                echo "o";
            }
            for ($space = 1; $space <= $k; $space++) {
                echo " ";
            }    
        }
        echo "\n";    
    }
    for ($x = 1; $x <= $k; $x++){
        echo "\n";
    }    
}