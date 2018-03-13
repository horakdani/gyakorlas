<?php

$array1 = [4, 63, 25, 12, -89, "brekeke", 4, 65, -7, 2, 63, 45, 95];
$array2 = [6, -89, "brekeke", 4, 65, -7, 23, 14, "kutyagumi"];
//$array3 = [-89, "brekeke", 65, 25, 104, "trallala"];

$set1 = new Set($array1);
$set2 = new Set($array2);

print_r($set1);
//print_r($set1->union($set2));
print_r($set1->intersection($set2));
print_r($set1->substract($set2));

//------------------------------------------------------------------------------
class Set {

    private $elements = [];

    public function __construct($elements) {
        foreach ($elements as $element) {
            $inArray = false;

            for ($i = 0; $i < count($this->elements) && !$inArray; $i++) {
                if ($element === $this->elements[$i]) {
                    $inArray = true;
                }
            }

            if (!$inArray) {
                $this->elements[] = $element;
            }
        }
    }

    public function union(Set $set) {
        foreach ($this->elements as $values) {
            $new[] = $values;
        }
        foreach ($set->elements as $values) {
            $new[] = $values;
        }
        return new Set($new);
    }

    public function intersection($set) {
        $new = [];
        for ($x = 0; $x < count($this->elements); $x++) {
            for ($y = 0; $y < count($set); $y++) {
                if ($this->elements[$x] == $set[$y]) {
                    $new[] = $this->elements[$x];
                }
            }
        }
        return new Set($new);
    }

//    public function intersection(Set $s) {
//        $new = [];
//        for ($i = 0; $i < count($this->elements); $i++) {
//            if ($s->isElement($this->elements[$i])) {
//                $new[] = $this->elements[$i];
//            }
//        }
//        return new Set($new);
//    }

    public function substract($set) {
        $new = [];
        foreach ($this->elements as $element) {
            $hit = false;
            for ($i = 0; $i < count($set->elements) && !$hit; $i++) {
                if ($element === $set->elements[$i]) {
                    $hit = true;
                }
            }
            if (!$hit) {
                $new[] = $element;
            }
        }
        return new Set($new);
    }

    public function toString() {
        return $this->elements;
    }

}
