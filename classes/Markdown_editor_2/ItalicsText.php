<?php

class ItalicsText extends PlainText {

	public function toMarkdown() {
		return "*" . "$this->text" . "*";
	}

	public function toHtml() {
		return "<i>" . $this->text . "</i>";
	}

}
