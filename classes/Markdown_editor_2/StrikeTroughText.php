<?php

class StrikeTroughText extends PlainText {
	
	public function toMarkdown() {
		return "~~"."$this->text" . "~~";
	}
	
	public function toHtml() {
		return "<strike>" . $this->text . "</strike>";
	}

}
 