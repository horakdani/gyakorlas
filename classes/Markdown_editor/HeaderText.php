<?php

class HeaderText extends CompositeText {

    public function toMarkdown() {
        return "#" . $this->texts . "#" . "\n";
    }
    
      public function toHTML() {
        return "<h1>" . $this->texts . "</h1>";
    }

}
