

<div wire:ignore.self class="modal fade" id="AddUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user-plus"></i>Creation d'un nouvel utilisateur</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent="AddUser()">
                <div class="row">
                    <div class="form-group col-6">
                      <label>Nom</label>
                      <div class="input-group">
                        <input type="text" wire:model="newUser.nom" placeholder="Nom utilisateur"  class="form-control @error('newUser.nom') is-invalid @enderror " >

                        @error("newUser.nom")
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group col-6">
                        <label>Prenom</label>
                        <div class="input-group">
                          <input type="text" wire:model="newUser.prenom" placeholder="Prenom utilisateur" class="form-control @error('newUser.prenom') is-invalid @enderror" >

                          @error("newUser.nom")
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Genre</label>
                    <select class="form-control @error("newUser.sexe") is-invalid @enderror"
                     wire:model="newUser.sexe"id="">
                        <option value="H">--------</option>
                        <option value="H">Homme</option>
                        <option value="F">Femme</option>
                    </select>
                  </div>

                <div class="row">
                      <div class="form-group col-6">
                        <label>Telephone1</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <i class="fas fa-phone"></i>
                                </div>
                            </div>
                          <input type="text" wire:model="newUser.telephone1" placeholder="Telephone 1"  class="form-control @error('newUser.prenom') is-invalid @enderror" >

                          @error("newUser.telephone1")
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group col-6">
                        <label>Telephone2</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <i class="fas fa-phone"></i>
                                </div>
                            </div>
                          <input type="text" wire:model="newUser.telephone2" placeholder="Telephone 2" class="form-control @error('newUser.prenom') is-invalid @enderror" >

                          @error("newUser.telephone2")
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                </div>
                <div class="row">
                      <div class="form-group col-6">
                        <label>Piece D'identiter</label>
                        <select class="form-control @error("newUser.pieceIdentite") is-invalid @enderror" wire:model="newUser.pieceIdentite" id="">
                            <option value="">---------</option>
                            <option value="CIN">CIN</option>
                            <option value="Permis">Permis de Conduire</option>
                            <option value="Passport">Passport</option>
                        </select>
                     </div>

                     <div class="form-group col-6">
                        <label>Numero D'identiter</label>
                        <div class="input-group">
                          <input type="text" wire:model="newUser.numeroPieceIdentite" placeholder="Numero piece identiter"  class="form-control @error('newUser.numeroPieceIdentite') is-invalid @enderror" >

                          @error("newUser.numeroPieceIdentite")
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                </div>

                      <div class="form-group">
                        <label>Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                          <input type="email" wire:model="newUser.email" placeholder="Email"  class="form-control @error('newUser.email') is-invalid @enderror" >
                        </div>
                      </div>
                    <div class="form-group">
                      <label>Password</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fas fa-lock"></i>
                          </div>
                        </div>
                        <input type="password" disabled wire:model="newUser.password" placeholder="Mot de passe" class="form-control @error('newUser.password') is-invalid @enderror" >
                      </div>
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>


                    {{-- <div class="form-group">
                        <label>Photo</label>
                        <div class="input-group">
                          <input type="file" wire:model="newUser.photo" placeholder="Photo Profile"  class="form-control">
                        </div>
                    </div> --}}
                    <div class="modal-footer bg-whitesmoke br">
                      <button type="submit" class="btn btn-primary">Enregistrer</button>
                      <a type="button" href="{{ route("admin.habilitations.users.index") }}" class="btn btn-danger">Retour a la liste utilisateur</a>
                    </div>
            </form>
        </div>
      </div>
    </div>
  </div>


  {{-- <script>
   window.addEventListener("ShowSuccessMessage", event =>{
       Swal.fire({
        //  position: 'top-end',
        //  icon: 'success',
        //  toast: true,
        //  title: event.detail.message || "Operations effectuer avec succès !!",
        //  showConfirmButton: false,
        //   timer: 1500
        console.log(event.detail.message);
       })
   })
  </script>  --}}
