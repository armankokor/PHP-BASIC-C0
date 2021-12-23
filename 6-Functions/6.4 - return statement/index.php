<?php
function geefTienProcent(){
$koopPrijs= 75;
$korting= 10;
$aankoopprijs= ($koopPrijs/100) * $korting;
return $koopPrijs - $aankoopprijs;
}

echo "Het totaalbedrag is " . geefTienProcent() . " euro.";
?>