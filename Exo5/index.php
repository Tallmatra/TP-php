<?php
include_once('fonction.php');
$x1=rand(1,100);
$y1=rand(1,100);
$x2=rand(1,100);
$y2=rand(1,100);
echo "Les coordonnes de A : x1= $x1 et y1= $y1" ."<br>";
echo "Les coordonnes de B : y1= $x2 et y2= $y2" ."<br>";
$d=distance( $x1,$y1,$x2,$y2);
echo "La distance entre A et B est : $d ";

?>