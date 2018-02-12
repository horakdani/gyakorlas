<?php

echo "\n********************************************************************* \n";
echo "***              Kiírom az első N db négyzetszámot                *** \n";
echo "********************************************************************* \n";
$n = readline("*** Add meg az N értékét: ");
echo "***\n";
echo "*** Az első N db négyzetszám a következő:\n";
for ($i = 1; $i <= $n; $i++) {
    echo "*** " . pow($i, 2) . "\n";
}

echo "********************************************************************** \n";
echo "*** Az N számnál kisebb négyzetszámok pedig a következők: \n";

for ($i = 1; $i <= $n; $i++) {
    $uj = pow($i, 2);
    if ($uj < $n) {
        echo "*** " . $uj . "\n";
    }
}



