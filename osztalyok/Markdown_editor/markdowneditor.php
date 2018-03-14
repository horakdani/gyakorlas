<?php

require 'PlainText.php';
require 'Header.php';
require 'BoldText.php';
require 'ItalicsText.php';
require 'UnderScoreText.php';
require 'StrikeTroughText.php';
require 'CompositeText.php';


$doc1 = new PlainText("Hello");
$doc2 = new BoldText(new PlainText("World"));

$doc = new CompositeText();
$doc->add($doc1);
$doc->add($doc2);

$doc = new UnderscoreText($doc);

if (isset($argv[1]) && $argv[1] === "html") {
    echo "\n" . $doc->toHtml() . "\n";
} else {
    echo "\n" . $doc->toMarkdown() . "\n";
}
