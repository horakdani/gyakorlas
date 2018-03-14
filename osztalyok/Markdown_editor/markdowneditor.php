<?php

require 'CompositeText.php';
require 'PlainText.php';
require 'Header.php';
require 'BoldText.php';
require 'ItalicsText.php';
require 'UnderScoreText.php';
require 'StrikeTroughText.php';

$text = new CompositeText();
$bold = new BoldText("World");
$text->add(new StrikeTroughText("Hello" . $bold->toMarkdown()));

//$text->add(new Header("Main Title"));
//$text->add(new PlainText("hello world"));
//$text->add(new BoldText("Lorem"));
//$text->add(new ItalicsText("Ipsum"));
//$text->add(new UnderscoreText("dolor"));
//$text->add(new StrikeTroughText("sit amet"));

echo "\n--------------------------------------------------------------------\n\n";
echo $text->toMarkdown();
echo "\n\n--------------------------------------------------------------------\n\n";
echo $text->toHtml();
echo "\n\n--------------------------------------------------------------------\n";
