<?php
include_once('fonction.php');
$a=rand(1,10);
$b=rand(1,10);
echo "a=$a et b=$b <br> ";
echo "La somme est : " .  somme($a,$b);


echo "  Le produit est :  ". produit($a,$b)  ."<br>" ;
 
echo "  l exponentiel est : ". exponentielle($a)  ."<br>" ;

echo " La différence est :" . difference($a,$b)  ."<br>" ;

echo " la division est :" . division($a,$b)  ."<br>" ;

echo "  le modulo est : " . modulo($a,$b)  ."<br>" ;

echo  "  le carré est : " . carre($a,$b)  ."<br>" ;
?>