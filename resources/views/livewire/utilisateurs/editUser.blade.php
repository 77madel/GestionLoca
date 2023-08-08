



<div wire:ignore.self class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="myLargeModalLabel">Modifier Utilisateur</h5>
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
                    <input type="text" wire:model="editUser.nom" placeholder="Nom utilisateur"  class="form-control @error('editUser.nom') is-invalid @enderror " >

                    @error("editUser.nom")
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>

                <div class="form-group col-6">
                    <label>Prenom</label>
                    <div class="input-group">
                      <input type="text" wire:model="editUser.prenom" placeholder="Prenom utilisateur" class="form-control @error('editUser.prenom') is-invalid @enderror" >

                      @error("editUser.nom")
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Genre</label>
                <select class="form-control @error("editUser.sexe") is-invalid @enderror"
                 wire:model="editUser.sexe"id="">
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
                      <input type="text" wire:model="editUser.telephone1" placeholder="Telephone 1"  class="form-control @error('editUser.prenom') is-invalid @enderror" >

                      @error("editUser.telephone1")
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
                      <input type="text" wire:model="editUser.telephone2" placeholder="Telephone 2" class="form-control @error('editUser.prenom') is-invalid @enderror" >

                      @error("editUser.telephone2")
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
            </div>
            <div class="row">
                  <div class="form-group col-6">
                    <label>Piece D'identiter</label>
                    <select class="form-control @error("editUser.pieceIdentite") is-invalid @enderror" wire:model="editUser.pieceIdentite" id="">
                        <option value="">---------</option>
                        <option value="CIN">CIN</option>
                        <option value="Permis">Permis de Conduire</option>
                        <option value="Passport">Passport</option>
                    </select>
                 </div>

                 <div class="form-group col-6">
                    <label>Numero D'identiter</label>
                    <div class="input-group">
                      <input type="text" wire:model="editUser.numeroPieceIdentite" placeholder="Numero piece identiter"  class="form-control @error('editUser.numeroPieceIdentite') is-invalid @enderror" >

                      @error("editUser.numeroPieceIdentite")
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
                      <input type="email" wire:model="editUser.email" placeholder="Email"  class="form-control @error('editUser.email') is-invalid @enderror" >
                    </div>
                  </div>
                {{-- <div class="form-group">
                  <label>Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-lock"></i>
                      </div>
                    </div>
                    <input type="password" disabled wire:model="editUser.password" placeholder="Mot de passe" class="form-control @error('editUser.password') is-invalid @enderror" >
                  </div>
                  <div id="pwindicator" class="pwindicator">
                    <div class="bar"></div>
                    <div class="label"></div>
                  </div>
                </div> --}}


                {{-- <div class="form-group">
                    <label>Photo</label>
                    <div class="input-group">
                      <input type="file" wire:model="editUser.photo" placeholder="Photo Profile"  class="form-control">
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