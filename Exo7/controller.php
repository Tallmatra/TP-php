<?php
session_start();
 include_once("fonction.php");

if(isset($_POST["bouton"]))
{
    $jour=$_POST["jour"];
    $mois=$_POST["mois"];
    $annee=$_POST["annee"];
    $_SESSION['post']=$_POST;
    $arrError=[];
    validerjour($jour,"jour",$arrError);
    validermois($mois,"mois",$arrError);
    validerannee($annee,"annee",$arrError);
    if(count($arrError)==0)
    {
      
      datesuivante($jour,$mois,$annee);
      dateprecedente($jour,$mois,$annee);
    }
    else
    {
        $_SESSION['error']=$arrError;
        header('location:index.php'); 
        exit();
    }  
}
   
 
else
{
    header('location:index.php');
    exit();
} 
 
 
?>