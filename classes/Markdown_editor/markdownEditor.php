<?php

require 'PlainText.php';
require 'Header.php';
require 'BoldText.php';
require 'ItalicsText.php';
require 'UnderscoreText.php';
require 'StriketroughText.php';

$document1 = new Header("Maint Title");
$document2 = new PlainText("Hello World");
$document3 = new BoldText("Lorem");
$document4 = new ItalicsText("Ipsum");
$document5 = new UnderscoreText("dolor");
$document6 = new StriketroughText("sit amet");

echo "\n";
echo $document1->toMarkdown();
echo $document2->toMarkdown();
echo $document3->toMarkdown();
echo $document4->toMarkdown();
echo $document5->toMarkdown();
echo $document6->toMarkdown();
echo "\n";


