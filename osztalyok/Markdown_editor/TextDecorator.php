<?php

class TextDecorator extends PlainText {

    /**
     * @var PlainText
     */
    protected $decoratedText;

    public function __construct(PlainText $object) {
        $this->decoratedText = $object;
    }

    public function toMarkdown() {
        return $this->decoratedText->toMarkdown();
    }

    public function toHtml() {
        return $this->decoratedText->toHtml();
    }

}
