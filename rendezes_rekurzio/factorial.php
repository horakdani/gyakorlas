<?php
echo "\n";
$n = readline("Adj meg egy számot: ");
echo "\n";
echo "A $n faktoriálisa: " . fact($n) . "\n";

function fact($n) {
  if ($n === 0) { 
     return 1;
  }
  else {
     return $n * fact($n-1);
  }
}