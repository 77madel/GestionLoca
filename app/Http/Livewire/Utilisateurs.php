<?php

namespace App\Http\Livewire;

use App\Http\Livewire\toastr;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Console\View\Components\Alert;

class Utilisateurs extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $newUser = [];

    protected $rules = [
        'newUser.nom' => 'required',
        'newUser.prenom' => 'required',
        'newUser.email' => 'required|email|unique:users,email',
        'newUser.telephone1' => 'required|numeric|unique:users,telephone1',
        'newUser.pieceIdentite' => 'required',
        'newUser.sexe' => 'required',
        'newUser.numeroPieceIdentite' => 'required|unique:users,numeroPieceIdentite',
    ];

    public function updated($propertyName)
    {
        //verification 
        $this->validateOnly($propertyName);

       
    }


    public function AddUser(){

        //pour verifier les informations saisis sont correcte 
        $validatedData = $this->validate();

        $validatedData['newUser']['password'] = "password";
        //create a new User
        User::create($validatedData['newUser']);

        //Pour reinitiatiser 
        $this->newUser = [];
        
    //   $this->dispatchBrowserEvent('ShowMessage', ['message' => 'Utilisateur ajouté avec succés']);  

        toastr()->success("Utilisateur cree avec succés");

      return redirect()->route("admin.habilitations.users.index");
    }

    public function render()
    {
        $users = User::latest()->paginate(5);
        return view('livewire.utilisateurs.index', compact('users'))
        ->extends("layouts.master")
        ->section("content");
    }

   
}
