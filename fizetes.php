<?php

# request a payment
echo "\n********************************************************************* \n";
echo "***   FIZETÉSI SZINT MEGHATÁROZÓ!   *** \n";
echo "********************************************************************* \n";
$payment = readline("*** Add meg a fizetésed (nettó): ");
echo "********************************************************************* \n";

# logic
$paymentLowLimit = 200000;
$paymentHighLimit = 400000;

if ($payment < $paymentLowLimit) {
    echo "*** A FIZETÉSED ALACSONYABB AZ ÁTLAGNÁL";
} elseif ($paymentLowLimit < $payment && $payment < $paymentHighLimit) {
    echo "*** A FIZETÉSED ÁTLAGOS";
} else {
    echo "*** A FIZETÉSED MAGAS";
}

echo "\n********************************************************************* \n";
























