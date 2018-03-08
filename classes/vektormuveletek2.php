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


$vektor = new Vektor();
$vektor->createVector($x1S, $y1S, $x1E, $y1E, $x2S, $y2S, $x2E, $y2E);
$vektorok[] = $vektor;

print_r($vektorok);

//------------------------------------------------------------------------------
class Vektor {

    private $x1Start;
    private $y1Start;
    private $x1End;
    private $y1End;
    
    private $x2Start;
    private $y2Start;
    private $x2End;
    private $y2End;

    public function createVector($x1Start, $y1Start, $x1End, $y1End, $x2Start, $y2Start, $x2End, $y2End) {
        $this->x1Start = $x1Start;
        $this->y1Start = $y1Start;
        $this->x1End = $x1End;
        $this->y1End = $y1End;
        
        $this->x2Start = $x2Start;
        $this->y2Start = $y2Start;
        $this->x2End = $x2End;
        $this->y2End = $y2End;
    }

    public function vectorSummation($x1Start, $y1Start, $x1End, $y1End, $x2Start, $y2Start, $x2End, $y2End) {  
      $x1E = $x1End - $x1Start;
      $y1E = $y1End - $y1Start;
      
      $x2E = $x2End - $x2Start;
      $y2E = $y2End - $y2Start;
      
      return ($x1E + $x2E) . ($y1E + $y2E);
    }

    public function vectorMultiplication() {
    }

    public function vectorCounterpart() {
    }

}
