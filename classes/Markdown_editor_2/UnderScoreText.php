<?php

class UnderscoreText extends PlainText {
	
	public function toMarkdown() {
		return "_"."$this->text" . "_";
	}

	public function toHtml() {
		return "<u>" . $this->text . "</u>";
	}
}