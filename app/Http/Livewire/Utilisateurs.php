<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Utilisateurs extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $newUser = [];


    public function AddUser(){
        dump($this->newUser);
    }

    public function render()
    {
        $users = User::paginate(5);
        return view('livewire.utilisateurs.index', compact('users'))
        ->extends("layouts.master")
        ->section("content");
    }

   
}
