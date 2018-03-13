<?php

class UnderscoreText extends PlainText {

//    private $text;

//    public function __construct($text) {
//        $this->text = $text;
//    }

    public function toMarkdown() {
        return "_" . $this->text . "_";
    }

}