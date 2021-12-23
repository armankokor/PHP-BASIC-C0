<?php
$abcGetallen = array("24,","56,","78,","90");
echo $abcGetallen[0] . $abcGetallen[1] . $abcGetallen[2] . $abcGetallen[3] . "." ;

$abcGetallen2=array("a","b");
array_push($abcGetallen2,"c","d");

print_r($abcGetallen);

echo $abcGetallen2[0];
echo $abcGetallen[1];
echo $abcGetallen2[2];
echo $abcGetallen[3];
?>