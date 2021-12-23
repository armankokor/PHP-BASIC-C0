<?php
function mijnNaamIsGroot($voornaam , $achternaam) {
$geheleNaam = "Mijn naam is $voornaam $achternaam ";
$geheleNaam = strtoupper($geheleNaam);
echo $geheleNaam;

}
mijnNaamIsGroot("BART","SIMPSON");

?>