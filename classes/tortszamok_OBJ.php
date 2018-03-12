<?php

$number1 = new Rational(5, 9);
$number2 = new Rational(3, 11);

echo "\n";
echo "----------------------------------------------\n";

echo "Az első törtszám: " . $number1->toString() . "\n";
echo "Az második törtszám: " . $number2->toString() . "\n";
echo "----------------------------------------------\n";
echo "A két törtszám összege: " . $number1->add($number2)->toString() . "\n";
echo "A két törtszám különbsége: " . $number1->substraction($number2)->toString() . "\n";
echo "A két törtszám szorzata: " . $number1->multiplication($number2)->toString() . "\n";
echo "A két törtszám hányadosa: " . $number1->divide($number2)->toString() . "\n";
echo "Az első törtszám értéke: " . $number1->toFloat() . "\n";
echo "Az második törtszám értéke: " . $number2->toFloat() . "\n";
echo "A két törtszám " . $number1->isEqual($number2) . ".\n";

//------------------------------------------------------------------------------
class Rational {

    private $numerator;
    private $denominator;

    public function __construct($numerator, $denominator) {
        $this->numerator = $numerator;
        $this->denominator = $denominator;
    }

    public function add($number) {
        return new Rational(($this->numerator * $number->denominator) + ($number->numerator * $this->denominator), $this->denominator * $number->denominator);
    }

    public function substraction($number) {
        return new Rational(($this->numerator * $number->denominator) - ($number->numerator * $this->denominator), $this->denominator * $number->denominator);
    }

    public function multiplication($number) {
        return new Rational($this->numerator * $number->numerator, $this->denominator * $number->denominator);
    }

    public function divide($number) {
        return new Rational($this->numerator * $number->denominator, $this->denominator * $number->numerator);
    }

    public function toFloat() {
        return $this->numerator / $this->denominator;
    }

    public function isEqual($number) {
        if ($this->numerator / $this->denominator === $number->numerator / $number->denominator) {
            return "egyenlő";
        } else {
            return "nem egyenlő";
        }
    }

    public function toString() {
        return $this->numerator . "/" . $this->denominator;
    }
}
