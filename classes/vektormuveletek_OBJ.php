<?php

echo "\n";
$x1S = readline("Első vektor kezdőpont X koordinátája: ");
$y1S = readline("Első vektor kezdőpont Y koordinátája: ");
$x1E = readline("Első vektor végpont X koordinátája: ");
$y1E = readline("Első vektor végpont Y koordinátája: ");
echo "\n";
$x2S = readline("Második vektor kezdőpont X koordinátája: ");
$y2S = readline("Második vektor kezdőpont Y koordinátája: ");
$x2E = readline("Második vektor végpont X koordinátája: ");
$y2E = readline("Második vektor végpont Y koordinátája: ");

$vektor1 = new Vector($x1S, $y1S, $x1E, $y1E);
$vektor2 = new Vector($x2S, $y2S, $x2E, $y2E);

echo "\nA két vektor összege: " . $vektor1->summation($vektor2)->toString() . "\n";
echo "\nA két vektor skaláris szorzata: " . $vektor1->multiplication($vektor2) . "\n";
echo "\nA vektor 1 ellentettje: " . $vektor1->opposite()->toString() . "\n";

// függvények ------------------------------------------------------------------

class Vector {

    /**
     * @var int
     */
    private $xStart;

    /**
     * @var int
     */
    private $xEnd;

    /**
     * @var int
     */
    private $yStart;

    /**
     * @var int
     */
    private $yEnd;

    public function __construct($xS, $yS, $xE, $yE) {
        $this->xStart = $xS;
        $this->yStart = $yS;
        $this->xEnd = $xE;
        $this->yEnd = $yE;
    }

    /**
     * @return Vector
     */
    public function summation(Vector $vektor2) {
        $a = $this->xEnd + ($vektor2->xEnd - $vektor2->xStart);
        $b = $this->yEnd + ($vektor2->yEnd - $vektor2->yStart);

        return new Vector($this->xStart, $this->yStart, $a, $b);
    }

    /**
     * @return int
     */
    public function multiplication(Vector $vektor2) {
        $v1xHely = $this->xEnd - $this->xStart;
        $v1yHely = $this->yEnd - $this->yStart;
        $v2xHely = $vektor2->xEnd - $vektor2->xStart;
        $v2yHely = $vektor2->yEnd - $vektor2->yStart;

        return $v1xHely * $v2xHely + $v1yHely * $v2yHely;
    }

    /**
     * @return Vector
     */
    public function opposite() {
        $xStart = $this->xStart;
        $yStart = $this->yStart;
        $xEnd = $this->xStart - ($this->xEnd - $this->xStart);
        $yEnd = $this->yStart - ($this->yEnd - $this->yStart);

        return new Vector($xStart, $yStart, $xEnd, $yEnd);
    }

    /**
     * @return string
     */
    public function toString() {
        return $this->xStart . ", " . $this->yStart . ", " . $this->xEnd . ", " . $this->yEnd;
    }

}
