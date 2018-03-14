<?php

require 'PlainText.php';
require 'Header.php';
require 'BoldText.php';
require 'ItalicsText.php';
require 'UnderScoreText.php';
require 'StrikeTroughText.php';
require 'CompositeText.php';


$doc1 = new PlainText("Hello");
$doc4 = new BoldText(new PlainText("World"));

$doc = new CompositeText();
$doc->add($doc1);
$doc->add($doc4);

$doc = new UnderscoreText($doc);

if (isset($argv[1]) && $argv[1] === "html") {
    echo $doc->toHtml();
} else {
    echo $doc->toMarkdown();
}
