<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
       //Autorisation pour les utilisateurs la ou il peut acceder
       Gate::define("admin", function($user){
        return $user->hasRole("admin");
       });

       Gate::define("manager", function($user){
        return $user->hasRole("manager");
       });

       Gate::define("employe", function($user){
        return $user->hasRole("employe");
       });

       Gate::after(function($user){
            if($user->hasRole("superadmin")){
                return true;
            }
            return false;
       });
    }
}
