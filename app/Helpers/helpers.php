<?php

use Illuminate\Support\Str;

function nomComplet()
{
    return auth()->user()->prenom . " " . auth()->user()->nom;
}

function setMenuOpen($route){
    $routeActuel = request()->route()->getName();
    if(contains($routeActuel, $route)){
        return "menu-open";
    }
    return "";
}

function contains($contenair, $contenu){
    return Str::contains($contenair, $contenu);
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
