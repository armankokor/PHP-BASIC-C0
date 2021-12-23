<?php
$test1 = 60;


if ($test1 <100 !== $test1 > 50) {
echo "het getal is groter dan 100 of kleiner dan 50!";
} else {
echo "het getal zit tussen de 100 en de 50!";
}
echo "<br>";

 

 

$test2 = 5;


if($test2 < 30 xor $test2 > 10) {
echo "het getal is groter dan 30 of kleiner dan 10!";
} else {
echo "het getal zit tussen de 30 en de 10!";
}
echo "<br>";


$test3 = 35;


if($test3 > 50 || $test3 < 30) {
echo "het getal is groter dan 50 of kleiner dan 30!";
} else {
echo "het getal zit tussen de 50 en de 30!";
}
echo "<br>";


$test4 = 5;


if($test4 < 20 && $test4 > 10) {
echo "het getal zit tussen de 20 en de 10!";
} else {
echo "het getal is groter dan 20 of kleiner dan 10!";
}
echo "<br>";
?>