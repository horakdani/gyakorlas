<?php

class UnderscoreText extends PlainText {

    private $object;

    public function __construct(PlainText $object) {
        $this->object = $object;
    }

    public function toMarkdown() {
        return "_" . $this->object->toMarkdown() . "_";
    }

    public function toHtml() {
        return "<u>" . $this->object->toHtml() . "</u>";
    }

}
