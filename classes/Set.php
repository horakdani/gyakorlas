<?php

$array = [4, 63, 25, 12, -89, "brekeke", 4, 65, -7, 2, 63, 45, 95];
//$array2 = [4, 63, 25, 12, -89, "brekeke", 4, 65, -7, 2, 63, 45, 95];
$array2 = [6, -89, "brekeke", 4, 65, -7, 23, 14, "kutyagumi"];
//$array3 = [-89, "brekeke", 65, 25, 104, "trallala"];

$set1 = new Set($array);
$set2 = new Set($array2);

print_r($set1->add("kukuriku"));


print_r($set1->toString());
//print_r($set2->toString());
//print_r($set1->union($set2)->toString());
//print_r($set1->intersection($set2)->toString());
//print_r($set1->substract($set2)->toString());

if ($set1->isElement("brekeke") === true) {
    echo "A keresett elem szerepel a halmazban";
} else {
    echo "A keresett elem nem szerepel a halmazban";
}

echo "\n";

if ($set1->isEqual($set2) === true) {
    echo "A két halmaz egyenlő";
} else {
    echo "A két halmaz nem egyenlő";
}

//------------------------------------------------------------------------------
class Set {

    private $elements = [];

    public function __construct($elements) {
        foreach ($elements as $element) {
            if (!in_array($element, $this->elements, true)) {
                $this->elements[] = $element;
            }
        }
    }

//    public function __construct($elements) {
//        foreach ($elements as $element) {
//            $this->add($element);
//        }
//    }

    public function union(Set $s) {
        $new = [];
        foreach ($this->elements as $values) {
            $new[] = $values;
        }
        foreach ($s->elements as $values) {
            $new[] = $values;
        }
        return new Set($new);
    }

    public function intersection(Set $s) {
        $new = [];
        for ($i = 0; $i < count($this->elements); $i++) {
            if ($s->isElement($this->elements[$i])) {
                $new[] = $this->elements[$i];
            }
        }
        return new Set($new);
    }

    public function substract(Set $s) {
        $new = [];
        foreach ($this->elements as $element) {
            if (!$s->isElement($element)) {
                $new[] = $element;
            }
        }
        return new Set($new);
    }

    public function isElement($element) {
        foreach ($this->elements as $value) {
            if ($value === $element) {
                return true;
            }
        }
        return false;
    }

    public function isEqual($set) {
        foreach ($this->elements as $value) {
            if (!$set->isElement($value)) {
                return false;
            }
        }
        return true;
    }

    public function add($element) {
        if (!$this->isElement($element)) {
            $this->elements[] = $element;
        }
    }

    function toString() {
        return $this->elements;
    }

}
