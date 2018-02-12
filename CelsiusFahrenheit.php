<?php

$celsius = (float) readline("Írd be az átváltandó hőmérsékletet °C-ban: ");
$fahrenheit = $celsius * 9/5 + 32;
echo $celsius . "°C = " . $fahrenheit . "°F \n";

$fahrenheit = (float) readline("Írd be az átváltandó hőmérsékletet °F-ben: ");
$celsius = ($fahrenheit -32) * 5/9;
echo $fahrenheit . "°F = " . $celsius . "°C";


