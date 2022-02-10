<?php

function distance( $x1,$y1,$x2,$y2):float
{
    return sqrt(pow(($x1-$x2),2)+pow(($y1-$y2),2));
}

?>