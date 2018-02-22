<?php

echo "Read one visit numbers:\t\t";

	$out = `echo 0 0 | php MuzemReform.php`;

	printAssert($out == "");

echo "\n";

echo "Read many visit numbers:\t\t";

	createTestFile([
		"11 25",
		"51 32",
		"31 10"
	]);

	$out = `php MuzemReform.php < muzeum-test.txt`;

	printAssert($out == "31");

	unlink("muzeum-test.txt");

echo "\n";

echo "Read repeating visit days:\t\t";

	createTestFile([
		"1 25",
		"5 32",
		"3 10",
		"5 10",
		"3 100"
	]);

	$out = `php MuzemReform.php < muzeum-test.txt`;

	printAssert($out == "1");

	unlink("muzeum-test.txt");

echo "\n";

function printAssert($result) {
	if ($result) {
		echo "OK";
	} else {
		echo "FAIL";
	}
}

function createTestFile($lines) {
	$fp = fopen("muzeum-test.txt", "w");

	foreach ($lines as $line) {
		fwrite($fp, "$line\n");
	}	
	
	fwrite($fp, "0 0\n");
	fclose($fp);
}
