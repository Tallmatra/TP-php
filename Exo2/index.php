<?php
include_once('fonction.php');
$long=rand(1 ,100);
echo"la longueur est $long <br>";
$large=rand(1,100);
echo"la longueur est $large <br>";
$per=perimetre($long,$large);
echo"le perimetre est $per <br>";
$sur=surface($large,$long);
echo"la surface est $sur <br>";
$diag=diagonale($large,$long);
echo"la diagonale est $diag <br>";
?>