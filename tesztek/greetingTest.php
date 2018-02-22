<?php

  echo "Test name argument required:\t\t";

    $lastLine = exec("php greeting.php", $out, $statusCode);
 
    if ($statusCode == 1 && $lastLine == "Please specify name(s)!") {
      echo "OK";
    }
    else {
      echo "FAIL";
    }

  echo "\n";

  echo "Test greeting to one from arg1:\t\t";

    if (`php greeting.php X` == "Hello Mr X.\n") {
      echo "OK";
    }
    else {
      echo "FAIL";
    }

  echo "\n";

  echo "Test greeting to all from args:\t\t";

    if (`php greeting.php X Y Z` == "Hello Mr X.\nHello Mr Y.\nHello Mr Z.\n") {
      echo "OK";
    }
    else {
      echo "FAIL";
    }

  echo "\n";  

  echo "Test greeting to all names from STDIN:\t";
  
    $fp = fopen("everybody", "w");
    fwrite($fp, "Doe\n");
    fwrite($fp, "Smith\n");
    fwrite($fp, "Anderson");
    fclose($fp);

    $out = `php greeting.php -- < everybody`;

    if ($out == "Hello Mr Doe.\nHello Mr Smith.\nHello Mr Anderson.\n") {
      echo "OK";
    }
    else {
      echo "FAIL" .$out;
    }

    unlink("everybody");

  echo "\n";

