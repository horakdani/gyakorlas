<?php

class Header extends PlainText {

	public function toMarkdown() {
		return "#" . $this->text . "#" . "\n";
	}

	public function toHtml() {
		return "<h1>" . $this->text . "</h1>" . "\n";
	}

}