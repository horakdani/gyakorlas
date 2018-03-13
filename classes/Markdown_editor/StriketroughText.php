<?php

class StriketroughText extends PlainText {

//    private $text;

//    public function __construct($text) {
//        $this->text = $text;
//    }

    public function toMarkdown() {
        return "~~" . $this->text . "~~";
    }

}