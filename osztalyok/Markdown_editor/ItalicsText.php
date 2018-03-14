<?php

class ItalicsText extends TextDecorator {

    public function toMarkdown() {
        return "*" . parent::toMarkdown() . "*";
    }

    public function toHtml() {
        return "<i>" . parent::toHtml() . "</i>";
    }

}
