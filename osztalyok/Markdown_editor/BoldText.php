<?php

class BoldText extends TextDecorator {



    public function toMarkdown() {
        return "**" . $this->decoratedText->toMarkdown() . "**";
    }

    public function toHtml() {
        return "<strong>" . $this->decoratedText->toHtml() . "</strong>";
    }

}
