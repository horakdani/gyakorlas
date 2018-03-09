<?php

$test = new Stack();
echo $test->push("trallala") . "\n";
echo $test->push("hehehe") . "\n";
echo $test->push("buzi") . "\n";

echo $test->pop() . "\n";

echo $test->pop() . "\n";


class Stack {

    private $array = [];

    public function push($data) {
       return $this->array[] = $data;
    }

    public function pop() {
        return array_pop($this->array);
    }

}
//------------------------------------------------------------------------------

$vektor = new Stack();





for ($x = 0; $x < count($index); $x++) {
    if (
            $argv[1] == $index[$x]["honnan"] &&
            $opposite == $index[$x]["hova"] &&
            $time >= $index[$x]["mikor"] &&
            $time <= $index[$x]["mikor"] + $index[$x]["ido"] &&
            $plate == $index[$x]["rendszam"]
    ) {
        $eredmeny = new index2();
        $eredmeny->loadFromIndex($index, $x);
        $index2[] = $eredmeny;
    }
}