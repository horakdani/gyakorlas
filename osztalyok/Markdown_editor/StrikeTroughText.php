<?php

class StrikeTroughText extends TextDecorator {

    public function toMarkdown() {
        return "~~" . $this->decoratedText->toMarkdown() . "~~";
    }

    public function toHtml() {
        return "<strike>" . $this->decoratedText->toMarkdown() . "</strike>";
    }

}
