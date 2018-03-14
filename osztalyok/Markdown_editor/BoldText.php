<?php

class BoldText extends PlainText {

    protected $object;

    public function __construct(PlainText $PlainText) {
        $this->object = $PlainText;
    }

    public function toMarkdown() {
        return "**" . $this->object->toMarkdown() . "**";
    }

    public function toHtml() {
        return "<strong>" . $this->object->toHtml() . "</strong>";
    }

}
