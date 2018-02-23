<?php

# request quadrilateral points
echo "\n************************************************************* \n";
echo "***   ADD MEG A NÉGYSZÖG CSÚCSPONTJAINAK KOORDINÁTÁIT!    *** \n";
echo "************************************************************* \n";
$Ax = readline("***   Ax --> a négyszög A pontjának X koordinátája: ");
$Ay = readline("***   Ay --> a négyszög A pontjának Y koordinátája: ");
echo "*** \n";
$Bx = readline("***   Bx --> a négyszög B pontjának X koordinátája: ");
$By = readline("***   By --> a négyszög B pontjának Y koordinátája: ");
echo "*** \n";
$Cx = readline("***   Cx --> a négyszög C pontjának X koordinátája: ");
$Cy = readline("***   Cy --> a négyszög C pontjának Y koordinátája: ");
echo "*** \n";
$Dx = readline("***   Dx --> a négyszög D pontjának X koordinátája: ");
$Dy = readline("***   Dy --> a négyszög D pontjának Y koordinátája: ");

# calculate side lenghts
$diffABx = ($Ax - $Bx);
$diffABy = ($Ay - $By);

$diffBCx = ($Bx - $Cx);
$diffBCy = ($By - $Cy);

$diffCDx = ($Cx - $Dx);
$diffCDy = ($Cy - $Dy);

$diffDAx = ($Dx - $Ax);
$diffDAy = ($Dy - $Ay);

$lenghtAB = sqrt(pow($diffABx, 2) + pow($diffABy, 2));
$lenghtBC = sqrt(pow($diffBCx, 2) + pow($diffBCy, 2));
$lenghtCD = sqrt(pow($diffCDx, 2) + pow($diffCDy, 2));
$lenghtDA = sqrt(pow($diffDAx, 2) + pow($diffDAy, 2));

# calculate perimeter and area
$perimeter = ($lenghtAB + $lenghtBC + $lenghtCD + $lenghtDA);
$area = (($lenghtAB * $lenghtBC) / 2) + (($lenghtDA * $lenghtCD) / 2);

# display results 
echo "************************************************************* \n";
echo "***          A NÉGYSZÖG JELLEMZŐI A KÖVETKEZŐK:          *** \n";
echo "************************************************************* \n";
echo "***   AB szakasz hossza: " . number_format($lenghtAB,2,",",".") . " egység \n";
echo "***   BC szakasz hossza: " . number_format($lenghtBC,2,",",".") . " egység \n";
echo "***   CD szakasz hossza: " . number_format($lenghtCD,2,",",".") . " egység \n";
echo "***   DA szakasz hossza: " . number_format($lenghtDA,2,",",".") . " egység \n" . "*** \n";
echo "***   A négyszög kerülete: " . number_format($perimeter,2,",",".") . " egység \n";
echo "***   A négyszög területe: " . number_format($area,2,",",".") . " egység \n" . "*** \n";
echo "*************************************************************\n";


















