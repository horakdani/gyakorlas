<?php

  if ($argc < 2) {
     echo "Please specify name(s)!";
     exit(1);
  }
  elseif ($argc == 2 && $argv[1] == "--") {
     $names = [];

     while(($name = fgets(STDIN)) !== false) {
       $names[] = trim($name);
     }
  }
  else {
     $names = $argv;
     array_shift($names);
  }

  foreach ($names as $name) {
     echo "Hello Mr " . $name . ".\n";
  }
