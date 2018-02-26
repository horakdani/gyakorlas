<?php
//2018.02.24. Sat
//2018.02.25. Sun
//2018.02.26. Mon


$file = "ugymenetek";
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= "John Smith\n";
// Write the contents back to the file
file_put_contents($file, $current);


