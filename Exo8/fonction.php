<?php

function validnombre($nombre , $key , array &$tab):void
{
    if(empty($nombre))
    {
        $tab[$key]="veuiller remplir le champ nombre";

    }else
    {
        if(is_numeric($nombre))
        {
            if($nombre<1)
            {
                $tab[$key]="veuiller entrer un nombre supérieur ou égal à 1";
            }

        }
        else
        {
            $tab[$key]="veuiller entrer un nombre supérieur ou égal à 1";
        }
        
    }
    
}

function afficher($nombre):void 
{
    $i=1;
    while($i<=$nombre)
    {
        echo"

            <li>  $i  </li>
        
        ";
        $i++;
    }

}
?>
