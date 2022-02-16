<?php

function validerjour($jour,$key,array &$arrError):void 
{
    if(empty($jour))
    {
        $arrError[$key]="Veuillez remplir le champ jour !!!";
    }
    else
    {
        if(is_numeric($jour))
        {
            if($jour>31 or $jour<1)
            {
                $arrError[$key]="Veuillez donner un nombre entre 1 et 31 !!!";
            }

        }
        else
        {
            $arrError[$key]="Veuillez entrer un nombre dans le champ jour !!!";  
        }

    }
}
function validermois($mois,$key,array &$arrError):void 
{
    if(empty($mois))
    {
        $arrError[$key]="Veuillez remplir le champ mois !!!";
    }
    else
    {
        if(is_numeric($mois))
        {
            if($mois>12 or $mois<1)
            {
                $arrError[$key]="Veuillez donner un nombre entre 1 et 12 !!!";
            }

        }
        else
        {
            $arrError[$key]="Veuillez entrer un nombre dans le champ mois !!!";  
        }

    }
}
function validerannee($annee,$key,array &$arrError):void 
{
    if(empty($annee))
    {
        $arrError[$key]="Veuillez remplir le champ annee!!!";
    }
    else
    {
        if(!is_numeric($annee))
        {
            
            $arrError[$key]="Veuillez donner un nombre dans le champ annee!!!";
        }

    }
   function bissextile($annee):bool{
       if(($annee % 400 == 0) || ($annee % 4 == 0 && $annee % 100 !=0)){
        return true;
       }
   } 


}
function njour($mois,$annee):int{
 if($mois==2)
   {
     if(bissextile($annee))
       {
         return 29;
        }
        else
       { 
         return 28;
        }
    }
    elseif($mois==4 or $mois==6 or $mois==9 or $mois==11 ) 
   {
     return 30;

    } 
    else
   {
      return 31;
    }


}

function datesuivante($jour,$mois,$annee):void
{
    $n=njour($mois,$annee);

    if($n!=$jour)
    {
        $jour=$jour+1;

    }else
    {
        $jour=1;
        if($mois=12)
        {
            $mois=1;
            $annee=$annee+1;
        }
        else
        {
            $mois++;
        }
    }
    echo "la date suivante est $jour/$mois/$annee";
    

}

function dateprecedente($jour,$mois,$annee):void
{
    if($jour!=1)
    {
        $jour=$jour-1;
    }else
    {
        if($mois==1)
        {
            $jour=31;
            $mois=12;
            $annee=$annee - 1;
        }else
        {
            $jour=njour($mois-1 ,$annee);
            $mois=$mois-1;
        }
    }
    echo "la date precedente est $jour/$mois/$annee";
}






?>