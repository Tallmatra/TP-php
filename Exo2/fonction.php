<?php
function perimetre(int $L , int $l ):int
{
    return(($L+$l)*2);
    }

function surface(int $L , int $l):float 
{
    return($L*$l);
}
function diagonal(int $L , int $l):float
{
    return(sqrt(pow($L,2)+ pow($l,2)));
}
?>