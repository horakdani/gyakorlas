<?php

class ItalicsText extends PlainText {

//    private $text;

//    public function __construct($text) {
//        $this->text = $text;
//    }

    public function toMarkdown() {
        return "*" . $this->text . "*";
    }

}