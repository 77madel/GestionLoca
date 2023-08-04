<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Utilisateurs;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group([
    "midlleware" => ["admin", "auth.admin"],
    "as" => "admin."
],function () {

    Route::group([
        "prefix" => "habilitations",
        "as" => "habilitations."
    ], function () {
        Route::get("/utilisateurs", Utilisateurs::class)->name("users.index");
    });

});

