<?php

class PlainText {

    protected $text;

    public function __construct($text) {
        $this->text = $text;
    }

    public function toMarkdown() {
        return $this->text;
    }

}
