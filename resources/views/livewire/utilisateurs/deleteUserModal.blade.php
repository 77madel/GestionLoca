

<div wire:ignore.self class="modal fade" id="deleteUser" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <form wire:submit.prevent='deleteUser'>
        <div class="modal-body">
        <h3>Etes-vous sur de continuer</h3>
        <p>Vous etes sur le point de supprimer <span>{{ nomComplet() }}</span>  de le list des utilisateurs</p>
        </div>
        <div class="modal-footer bg-whitesmoke br">
        <button type="submit" id="toastr-2" class="btn btn-primary">Continuer</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
        </div>
    </form>
  </div>
</div>
</div>

