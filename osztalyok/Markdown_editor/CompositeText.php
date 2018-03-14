<?php

class CompositeText extends PlainText {

    /**
     *
     * @var type PlainText
     */
    private $texts = [];

    public function __construct() {
        
    }

    /**
     * 
     * @param type $object
     */
    public function add($object) {
        $this->texts[] = $object;
    }

    /**
     * 
     * @return type String
     */
    public function toMarkdown() {
        $kiir = "";
        foreach ($this->texts as $value) {
            $kiir .= $value->toMarkdown();
        }
        return $kiir;
    }

    /**
     * 
     * @return type String
     */
    public function toHtml() {
        $kiir = "";
        foreach ($this->texts as $value) {
            $kiir .= $value->toHtml();
        }
        return $kiir;
    }

}
