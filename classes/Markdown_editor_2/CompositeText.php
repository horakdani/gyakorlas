<?php

class CompositeText {

    private $texts = [];

    public function add($object) {
        $this->texts[] = $object;
    }

    public function toMarkdown() {
        $kiir = "";
        foreach ($this->texts as $value) {
            $kiir .= $value->toMarkdown();
        }
        return $kiir;
    }

    public function toHtml() {
        $kiir = "";
        foreach ($this->texts as $value) {
            $kiir .= $value->toHtml();
        }
        return $kiir;
    }

}
