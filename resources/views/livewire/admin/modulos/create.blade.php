        <!-- Modal -->    
        <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">{{$id_modulo > 0 ? 'Editar Modulo' : 'Crear Modulo' }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form wire:submit.prevent="save">
                    <div class="modal-body">
                        <div class="col-md-12 mb-3">
                            <label for="nombre" class="text-dark">Nombre del Modulo: <span class="text-danger">*</span></label>
                            <input type="text" wire:model.defer="nombre"  class="form-control @error('nombre') is-invalid @enderror" id="nombre" placeholder="Ingrese nombre del modulo">
                            @error('nombre')<small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="link" class="text-dark">Link del Modulo: <span class="text-danger">*</span></label>
                            <input type="url" wire:model.defer="link"  class="form-control @error('link') is-invalid @enderror" id="link" placeholder="https://example.com" pattern="https://.*">
                            @error('link')<small class="text-danger">{{$message}}</small>@enderror
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