<?php
function validenombre($nombre,$key,array $tab):void{
    if(empty($nombre)){
       $tab[$key]=  "veuiller entrer un nombre ";
    }
    else
    {
        if(is_numeric($nombre)){
            if($nombre<1){
                $tab[$key]="veuiller entrer un nombre supèrieur ou égal à 1";

            }

        }else
        $tab[$key]="veuiller entrer un nombre supèrieur ou égal à 1";

    }
}
function multiplication($nombre,$key,$tab):void{
    for(i==0 à n ,){

    }




}

?>