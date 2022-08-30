    <!-- Modal -->
    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title text-dark" id="exampleModalLabel">{{$id_curso > 0 ? 'Editar Curso' : 'Crear Curso' }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form wire:submit.prevent="save">
                <div class="modal-body">
                    <div class="col-md-12 mb-3">
                        <label for="nombre" class="text-dark">Nombre de Curso: <span class="text-danger">*</span></label>
                        <input type="text" wire:model.defer="nombre"  class="form-control @error('nombre') is-invalid @enderror" id="nombre" placeholder="Ingrese nombre del curso">
                        @error('nombre')<small class="text-danger">{{$message}}</small>@enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="categoria_id" class="text-dark">Categoria: <span class="text-danger er">*</span></label> <a href="/dashboard/movilidad" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ir a lista semestres"><i class="fas fa-paper-plane"></i></a>
                        <select class="form-control @error('categoria_id') is-invalid @enderror" wire:model="categoria_id">
                            <option value="">Seleccionar</option>
                                @foreach($categorias as $c)
                                <option value="{{$c->id}}" >{{strtoupper($c->nombre)}}</option>
                                @endforeach 
                        </select>
                        @error('categoria_id')<small class="text-danger">{{$message}}</small> @enderror
                    </div>
                    
                    <div class="col-md-12 mb-3">
                        <label for="descripcion" class="text-dark">Descripcion: <span class="text-danger">*</span></label>
                        <textarea name="descripcion" id="" cols="30" rows="4"  wire:model.defer="descripcion" class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" placeholder="Ingrese Descripcion del curso"></textarea>
                        @error('descripcion')<small class="text-danger">{{$message}}</small>@enderror
                    </div>

                    <div class="col-md-12">
                        <label for="subdescripcion" class="text-dark">¿Qué se aprenderá? <span class="text-danger">*</span></label>
                        <textarea name="" id="" cols="30" rows="4"  wire:model.defer="subdescripcion" class="form-control @error('subdescripcion') is-invalid @enderror" id="subdescripcion" placeholder="Ingrese una subDescripcion del curso"></textarea>
                        @error('subdescripcion')<small class="text-danger">{{$message}}</small>@enderror
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