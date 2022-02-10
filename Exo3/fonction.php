<?php
function somme(float $a , float $b ):float{
    return($a+$b);

}

function exponentielle(float $a):float{
       return(exp($a));

    }

function difference( int $a, int $b):int{
    return($a-$b);
}
function produit( float $a, float $b):float{
    return($a*$b);
}
function modulo(int $a, int $b):int{
    return($a%$b);
}
function division(int $a, int $b):int{
    return(intdiv($a,$b));
}
function carre(float $a):float{
    return(pow($a,2));
}

?>