<?php

include_once("fonction.php");

session_start();

if(isset($_POST['button']))
{
    
    $nombre=$_POST["nombre"];
    $_SESSION["nombre"]=$_POST;

    if(!isset($_POST["nombre"]))
    {
        //var_dump($_SESSION);
    }
    //var_dump($_SESSION);
    $arrError=[];
    validnombre($nombre,"nombre",$arrError);
    if(count($arrError)==0)
    {
        afficher($nombre);
    }
    else
    {
    $_SESSION['error']=$arrError;
    header('location:index.php'); 
    exit();
       // var_dump($arrError);//voire le contenu du tableau
    }


}

else
{
    //Redirection
    header('location:index.php');
    exit();
}




?>




    
    
    
