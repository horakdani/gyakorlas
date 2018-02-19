<?php

echo "Test biggest prime to number 500:\t\t";

    if (`php legnagyobbprimARG.php 500` == "499") {
      echo "OK";
    }
    else {
      echo "FAIL";
    }

  echo "\n";
  
  echo "Test biggest prime to number 500 from STDIN:\t";
  
    $fp = fopen("primetest", "w");
    fwrite($fp, "500");
    fclose($fp);
    
    $out = `php legnagyobbprimARG.php -- < primetest`;

    if ($out == "499") {
      echo "OK";
    }
    else {
      echo "FAIL " .$out;
    }
    
    unlink("primetest");
    

