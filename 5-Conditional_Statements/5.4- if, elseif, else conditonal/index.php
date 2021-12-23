<?php

$prod_besteld = 19;

if($prod_besteld < 10) {
$prijs = 1.30;
} elseif($prod_besteld < 20) {
$prijs = 1.50;
} else {
$prijs = 1.00;
}
echo $prijs;
echo "<br>";

 


$prod_besteld = 34;

if($prod_besteld < 40) {
$prijs = 1.25;
} elseif($prod_besteld < 30) {
$prijs = 1.45;
} else {
$prijs = 1.09;
}
echo $prijs;
echo "<br>";

 


$prod_besteld = 80;

if($prod_besteld <60 ) {
$prijs = 0.90;
} elseif($prod_besteld < 30) {
$prijs = 0.70;
} else {
$prijs = 1.00;
}
echo $prijs;
echo "<br>";

?>