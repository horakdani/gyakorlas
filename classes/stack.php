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
