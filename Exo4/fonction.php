<?php
function permutation(int $a, int $b ):void
{
    echo"Avant permutation a=$a et b=$b <br>";
    $c=$b;
    $b=$a;
    $a=$c;
    echo"Après permutation a=$a et b=$b <br>";

}

?>