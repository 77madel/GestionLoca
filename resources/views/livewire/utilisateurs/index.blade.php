<div>
  

    @include('livewire.utilisateurs.addUserModal')
    
  
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header bg-primary">
              <h4 class="card-title text-white"><i class="fas fa-users "></i>Liste des Utilisateurs </h4>
              <div class="card-header-form">
                <form>
                  <div class="input-group d-flex align-items-center">
                    <button type="button" class="btn btn-dark mr-3" data-toggle="modal" data-target="#AddUser">
                        <i class="fas fa-user-plus "></i>  Nouvel utilisateur</button>
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="card-body table-responsive p-0 table-striped" style="height: 300px">
              <div class="table-responsive">
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>User</th>
                        <th>Roles</th>
                        <th>Ajouter</th>
                        <th>Action</th>
                     </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user )
                        
                    <tr>
                        <td>
                            @if($user->sexe == "0")
                             <img src="{{ asset("img/femme.png") }}" width="24px">
                            @else
                             <img src="{{ asset("img/utilisateur.png") }}" width="24px">
                            @endif
                        </td>
                        <td>{{ $user->prenom }} {{ $user->nom }}</td>
                        <td>{{ $user->roles->implode("nom", "|") }}</td>
                        <td>{{ $user->created_at->diffForHumans() }}</td>
                        <td>
                            <button class="btn btn-outline-primary "> <i class="fas fa-edit"></i> </button>
                            <button class="btn btn-outline-danger"> <i class="fas fa-trash"></i> </button>
                        </td>
                    </tr>
                 @endforeach
                </tbody>       
                </table>
              </div>
              <div class="card-footer">
                <div class="float-right">
                    {{ $users->links() }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
</div>
