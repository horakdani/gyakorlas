<?php

$circle1 = new Circle(5.1766);
$circle2 = new Circle(4.23);
        
echo "\nA kör sugara: " . $circle1->getRadius() . " egység." . "\n";
echo "\nA kör kerülete: " . $circle1->circumference() . " egység." . "\n";
echo "\nA kör területe: " . $circle1->area() . " egység." . "\n";
echo "\nA körök területének összegével megegyező területű kör sugara: " . $circle1->equalRad($circle2)->toString() . " egység." . "\n";


//------------------------------------------------------------------------------
class Circle {

    private $rad;

    public function __construct($rad) {
        $this->rad = $rad;
    }

    public function getRadius() {
        return $this->rad;
    }

    public function circumference() {
        return 2 * pi() * $this->rad;
    }

    public function area() {
        return pow($this->rad, 2) * pi();
    }

    public function equalRad($circle2) {
        return new Circle(sqrt(pow($this->rad, 2) + pow($circle2->getRadius(), 2)));
    }
    
    public function toString() {
        return $this->rad;
    }
    

}
