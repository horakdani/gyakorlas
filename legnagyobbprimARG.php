<?php

if ($argc > 1) {

        $n = $argv[1];
        $iHighest = 1;
        for ($i = 1; $i < $n; $i++) {
            $vanoszto = FALSE;
            $oszto = 2;    
            while ($oszto < $i && $vanoszto !== TRUE) {
                if ($i % $oszto == 0) {
                    $vanoszto = TRUE;
                }
            $oszto++;
            }
            if ($vanoszto !== TRUE) {
                $iHighest = $i;
            } 
        }
        echo "Az általad megadott számnál kisebb, legnagyobb prímszám: " . $iHighest;
}
