<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  wire:ignore.self >
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-dark" id="exampleModalLabel">{{$id_tema > 0 ? 'Editar Tema' : 'Crear Tema' }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form wire:submit.prevent="save">
            <div class="modal-body">
                <div class="col-md-12 mb-3">
                    <label for="descripcion" class="text-dark">Descripcion: <span class="text-danger">*</span></label>
                    <input type="text" wire:model.defer="descripcion"  class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" placeholder="Ingrese la descripcion del tema">
                    @error('descripcion')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="col-md-12 mb-3">
                    <label for="fecha" class="text-dark">Fecha: <span class="text-danger">*</span></label>
                    <input type="date" wire:model.defer="fecha"  class="form-control @error('fecha') is-invalid @enderror" id="fecha">
                    @error('fecha')<small class="text-danger">{{$message}}</small>@enderror
                </div>           
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-undo-alt"></i> Cancelar</button>
                <button type="submit" class="btn btn-primary"><i class="fas fa-download"></i> Guardar</button>
            </div>
        </form>
    </div>
    </div>
</div>