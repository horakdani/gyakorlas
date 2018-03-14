<?php

class UnderscoreText extends TextDecorator {



    public function toMarkdown() {
        return "_" . $this->decoratedText->toMarkdown() . "_";
    }

    public function toHtml() {
        return "<u>" . $this->decoratedText->toHtml() . "</u>";
    }

}
