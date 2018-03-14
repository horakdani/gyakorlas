<?php

class Header extends PlainText {

    private $object;

    public function __construct(PlainText $object) {
        $this->object = $object;
    }

    public function toMarkdown() {
        return "#" . $this->object->toMarkdown() . "#" . "\n";
    }

    public function toHtml() {
        return "<h1>" . $this->object->toHtml() . "</h1>" . "\n";
    }

}
