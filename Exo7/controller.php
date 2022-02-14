<?php
 include_once("fonction.php");
session_start();
if(isset($_POST["bouton"]))
{
    $jour=$_POST["jour"];
    $mois=$_POST["mois"];
    $anne=$_POST["annee"];
    $_SESSION['post']=$_POST;
    $arrError=[];
    validerjour($jour,"jour",$arrError);
    validermois($mois,"mois",$arrError);
    validerannee($annee,"annee",$arrError);
    if(count($arrError)==0)
    {
      //afficher($jour,$mois,$anne);
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