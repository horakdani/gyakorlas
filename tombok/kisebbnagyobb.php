<?php
echo "\n";
$array = [4,63,25,12,-89,4,65,-7,2,63,45,95];
$p = readline("Adj meg egy egész számot: ");

$countArray = count($array);
$countSmaller = 0;
$countBigger = 0;

for ($i = 0; $i < $countArray; $i++){
    if ($array[$i] < $p){
        $countSmaller++;
    }
    if ($array[$i] > $p){
        $countBigger++;
    }
}
echo "\n";
echo "Nagyobb számból " . $countBigger . "db van a tömbben.\n";
echo "Kisebb számból " . $countSmaller . "db van a tömbben.\n";
echo "\n";
if ($countSmaller > $countBigger){
    echo "A tömbben az általad megadott számnál KISEBB számokból van több.";
}
if ($countBigger > $countSmaller){
    echo "A tömbben az általad megadott számnál NAGYOBB számokból van több.";
}
echo "\n";