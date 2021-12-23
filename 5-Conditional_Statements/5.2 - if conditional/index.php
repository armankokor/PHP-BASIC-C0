<?php
$test1 = 10;
$test2 = 6;

if($test1 != $test2) {
echo "ongelijk";
echo "<br>";
}

$test1 = 10;
$test2 = 6;

if($test1 !== $test2) {
echo "identiek";
echo "<br>";
}


$test1 = 10;
$test2 = 6;

if($test1 > $test2) {
echo "test1 is groter dan test2";
echo "<br>";
}

$test1 = 10;
$test2 = 6;

if($test1 >= $test2) {
echo "test1 is groter of gelijk aan test2";
echo "<br>";
}
?>