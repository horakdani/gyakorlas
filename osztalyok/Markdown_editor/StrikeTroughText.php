<?php

class StrikeTroughText extends PlainText {

    private $object;

    public function __construct(PlainText $object) {
        $this->object = $object;
    }

    public function toMarkdown() {
        return "~~" . $this->object->toMarkdown() . "~~";
    }

    public function toHtml() {
        return "<strike>" . $this->object->toMarkdown() . "</strike>";
    }

}
