<?php

# request triangle points
echo "\n************************************************************* \n";
echo "***   ADD MEG A HÁROMSZÖG CSÚCSPONTJAINAK KOORDINÁTÁIT!   *** \n";
echo "************************************************************* \n";
$Ax = readline("***   Ax --> a háromszög A pontjának X koordinátája: ");
$Ay = readline("***   Ay --> a háromszög A pontjának Y koordinátája: ");
echo "*** \n";
$Bx = readline("***   Bx --> a háromszög B pontjának X koordinátája: ");
$By = readline("***   By --> a háromszög B pontjának Y koordinátája: ");
echo "*** \n";
$Cx = readline("***   Cx --> a háromszög C pontjának X koordinátája: ");
$Cy = readline("***   Cy --> a háromszög C pontjának Y koordinátája: ");

# calculate side lenghts
$diffABx = ($Ax - $Bx);
$diffABy = ($Ay - $By);

$diffACx = ($Ax - $Cx);
$diffACy = ($Ay - $Cy);

$diffBCx = ($Bx - $Cx);
$diffBCy = ($By - $Cy);

$lenghtAB = sqrt(pow($diffABx,2) + pow($diffABy,2));
$lenghtAC = sqrt(pow($diffACx,2) + pow($diffACy,2));
$lenghtBC = sqrt(pow($diffBCx,2) + pow($diffBCy,2));

# calculate perimeter and area
$perimeter = ($lenghtAB + $lenghtAC + $lenghtBC);
$area = (($lenghtAB * $lenghtAC) / 2);

# calculate heights
$heightAB = (sqrt($lenghtAC + $lenghtAB + $lenghtBC) * sqrt($lenghtAB + $lenghtBC -$lenghtAC) * sqrt($lenghtAC - $lenghtAB + $lenghtBC) * sqrt($lenghtAC + $lenghtAB - $lenghtBC)) / (2*$lenghtAB);
$heightAC = (sqrt($lenghtAC + $lenghtAB + $lenghtBC) * sqrt($lenghtAB + $lenghtBC - $lenghtAC) * sqrt($lenghtAC - $lenghtAB + $lenghtBC) * sqrt($lenghtAC + $lenghtAB - $lenghtBC)) / (2 * $lenghtAC);
$heightBC = (sqrt($lenghtAC + $lenghtAB + $lenghtBC) * sqrt($lenghtAB + $lenghtBC -$lenghtAC) * sqrt($lenghtAC - $lenghtAB + $lenghtBC) * sqrt($lenghtAC + $lenghtAB - $lenghtBC)) / (2*$lenghtBC);

# calculate angles
$cosBeta = (pow($lenghtAB,2) + pow($lenghtBC,2) - pow($lenghtAC,2)) / (2 * $lenghtAB * $lenghtBC);
$acosBeta = acos($cosBeta);
$beta = rad2deg($acosBeta);

$cosGamma = (pow($lenghtAC,2) + pow($lenghtBC,2) - pow($lenghtAB,2)) / (2 * $lenghtAC * $lenghtBC);
$acosGamma = acos($cosGamma);
$gamma = rad2deg($acosGamma);

$alpha = 180 - $beta - $gamma;

# display results 
echo "************************************************************* \n";
echo "***          A HÁROMSZÖG JELLEMZŐI A KÖVETKEZŐK:          *** \n";
echo "************************************************************* \n";
echo "***   AB szakasz hossza: " . number_format($lenghtAB,2,",",".") . " egység \n";
echo "***   AC szakasz hossza: " . number_format($lenghtAC,2,",",".") . " egység \n";
echo "***   BC szakasz hossza: " . number_format($lenghtBC,2,",",".") . " egység \n" . "*** \n";
echo "***   A háromszög kerülete: " . number_format($perimeter,2,",",".") . " egység \n";
echo "***   A háromszög területe: " . number_format($area,2,",",".") . " egység \n" . "*** \n";
echo "***   AB szakasz magassága: " . number_format($heightAB,2,",",".") . " egység \n";
echo "***   AC szakasz magassága: " . number_format($heightAC,2,",",".") . " egység \n";
echo "***   BC szakasz magassága: " . number_format($heightBC,2,",",".") . " egység \n" . "*** \n";
echo "***   Az AC és AB által befogott ALFA szög: ". $alpha . "° \n";
echo "***   Az AB és BC által befogott BÉTA szög: ". $beta . "° \n";
echo "***   Az AC és BC által befogott GAMMA szög: ". $gamma . "° \n";
echo "*************************************************************\n";











        





