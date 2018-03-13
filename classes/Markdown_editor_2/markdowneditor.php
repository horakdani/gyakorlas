<?php

require 'CompositeText.php';
require 'PlainText.php';
require 'Header.php';
require 'BoldText.php';
require 'ItalicsText.php';
require 'UnderScoreText.php';
require 'StrikeTroughText.php';

$proba = new CompositeText();
$proba->add(new Header("Main Title"));
$proba->add(new PlainText("hello world"));
$proba->add(new BoldText("Lorem"));
$proba->add(new ItalicsText("Ipsum"));
$proba->add(new UnderscoreText("dolor"));
$proba->add(new StrikeTroughText("sit amet"));

echo "\n";
echo $proba->toMarkdown() . "\n";
echo "\n";
echo $proba->toHtml();
echo "\n";