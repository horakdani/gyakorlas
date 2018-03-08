<?php

$x1S = readline("Első vektor kezdőpont X koordinátája: ");
$y1S = readline("Első vektor kezdőpont Y koordinátája: ");
$x1E = readline("Első vektor végpont X koordinátája: ");
$y1E = readline("Első vektor végpont Y koordinátája: ");
echo "\n";
$x2S = readline("Második vektor kezdőpont X koordinátája: ");
$y2S = readline("Második vektor kezdőpont Y koordinátája: ");
$x2E = readline("Második vektor végpont X koordinátája: ");
$y2E = readline("Második vektor végpont Y koordinátája: ");


$vektor1 = new Vektor();
$vektor1->createVector($x1S, $y1S, $x1E, $y1E);
$vektorok[] = $vektor1;

$vektor2 = new Vektor();
$vektor2->createVector($x2S, $y2S, $x2E, $y2E);
$vektorok[] = $vektor2;

//------------------------------------------------------------------------------
//$vektor1 = new Vektor();
//$vektor1->createVector(10, 15, 20, 25);
//$vektorok[] = $vektor1;
//
//$vektor2 = new Vektor();
//$vektor2->createVector(6, 23, 2, 12);
//$vektorok[] = $vektor2;

print_r($vektorok);

//------------------------------------------------------------------------------
class Vektor {

    private $xStart;
    private $yStart;
    private $xEnd;
    private $yEnd;

    public function createVector($xStart, $yStart, $xEnd, $yEnd) {
        $this->xStart = $xStart;
        $this->yStart = $yStart;
        $this->xEnd = $xEnd;
        $this->yEnd = $yEnd;
    }

    public function vectorSummation() {  
    }

    public function vectorMultiplication() {
    }

    public function vectorCounterpart() {
    }

}
