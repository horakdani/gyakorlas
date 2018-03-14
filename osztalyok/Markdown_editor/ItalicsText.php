<?php

class ItalicsText extends PlainText {

    private $object;

    public function __construct(PlainText $object) {
        $this->object = $object;
    }

    public function toMarkdown() {
        return "*" . $this->object->toMarkdown() . "*";
    }

    public function toHtml() {
        return "<i>" . $this->object->toHtml() . "</i>";
    }

}
