<?php

function nomComplet()
{
    return auth()->user()->prenom . " " . auth()->user()->nom;
}

function getNomRole(){
    $rolesName = "";
    $i = 0;
    foreach (auth()->user()->roles as $role){
        $rolesName .= $role->nom;
        //Pour prendre les premiers elements
        if($i > sizeof(auth()->user()->roles) - 1){
            return $rolesName .= ",";
        }
        $i ++;
    }

    return $rolesName;


}
