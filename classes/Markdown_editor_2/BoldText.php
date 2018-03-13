<?php

class BoldText extends PlainText {

    public function toMarkdown() {
        return "**" . "$this->text" . "**";
    }

    public function toHtml() {
        return "<strong>" . $this->text . "</strong>";
    }

}
