<?php
$amount = 5000;

$vat = $amount * 0.15;

echo "Given Amount is : $" . $amount . "<br><br>";
echo "The calculate VAT (15%) will be : $" . $vat . "<br><br>";
echo "Total amount with the VAT is : $" . ($amount + $vat);
?>