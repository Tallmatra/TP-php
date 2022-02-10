<?php
    include_once("fonction.php");
    $monCote=rand(1,10);
    echo "Mon cote est $monCote";
    echo "<br>";
    $peri=perimetre($monCote);
    echo "Le perimetre est $peri";
    echo "<br>";
    $aire=surface($monCote);
    "<br>";
    echo "La surface est $aire";
    
?>