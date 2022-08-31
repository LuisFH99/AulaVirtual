        <!-- Modal -->    
        <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">{{$id_publicacion > 0 ? 'Editar Publicacion' : 'Crear Publicacion' }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form wire:submit.prevent="save">
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="curso">Curso: <span class="text-danger">*</span></label>
                                <select  wire:model.defer="cursos_id" class="select2 form-control @error('cursos_id') is-invalid @enderror" id="curso">
                                    <option value="">Seleccionar</option>
                                    @foreach($cursos as $c)
                                    <option value="{{$c->id}}" >{{strtoupper($c->nombre)}}</option>
                                    @endforeach
                                </select>
                                @error('cursos_id')<small class="text-danger">{{$message}}</small>@enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="rutaimg">Imagen de Referencia: <span class="text-danger">*</span></label>
                                <div class="custom-file">
                                    <input type="file" wire:model.defer="rutaimg" aria-describedby="inputGroupFileAddon04" id="customFileLang" lang="es" class="custom-file-input @error('rutaimg') is-invalid @enderror" id="rutaimg">
                                    <label class="custom-file-label" for="customFileLang">Seleccionar Imagen</label>
                                </div>
                              @error('rutaimg')<small class="text-danger">{{$message}}</small>@enderror 
                                <div wire:loading wire:target="rutaimg">
                                    <small class="text-danger font-weight-bold">Subiendo Imagen...</small>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="niveles_id">Nivel: <span class="text-danger">*</span></label>
                                <select  wire:model.defer="niveles_id" class="select2 form-control @error('niveles_id') is-invalid @enderror" id="niveles_id">
                                    <option value="">Seleccionar</option>
                                    @foreach($niveles as $n)
                                    <option value="{{$n->id}}" >{{strtoupper($n->nivel)}}</option>
                                    @endforeach
                                </select>
                                @error('niveles_id')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group col-md-5">
                                <label for="tipopublicacion_id">Categoria: <span class="text-danger">*</span></label>
                                <select  wire:model.defer="tipopublicacion_id" class="select2 form-control @error('tipopublicacion_id') is-invalid @enderror" id="tipopublicacion_id">
                                    <option value="">Seleccionar</option>
                                    @foreach($tipos as $t)
                                    <option value="{{$t->id}}" >{{strtoupper($t->tipo)}}</option>
                                    @endforeach
                                </select>
                                @error('tipopublicacion_id')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="nota_minima">Nota Minima: <span class="text-danger">*</span></label>
                                <input type="number" wire:model.defer="nota_minima"  class="form-control  @error('nota_minima') is-invalid @enderror" id="nota_minima">
                                @error('nota_minima')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="fecha_inicio">Fecha de Inicio: <span class="text-danger">*</span></label>
                                <input type="date" wire:model.defer="fecha_inicio"  class="form-control @error('fecha_inicio') is-invalid @enderror" id="fecha_inicio">
                                @error('fecha_inicio')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group col-md-5">
                              <label for="fecha_fin">Fecha de Cierre: <span class="text-danger">*</span></label>
                              <input type="date" wire:model.defer="fecha_fin"  class="form-control  @error('fecha_fin') is-invalid @enderror" id="fecha_fin">
                              @error('fecha_fin')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="horas">Horas: <span class="text-danger">*</span></label>
                                <input type="number" wire:model.defer="horas"  class="form-control  @error('horas') is-invalid @enderror" id="horas">
                                @error('horas')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="fecha_inicio_matricula">Fecha de Inicio - Matricula: <span class="text-danger">*</span></label>
                                <input type="date" wire:model.defer="fecha_inicio_matricula"  class="form-control @error('fecha_inicio_matricula') is-invalid @enderror" id="fecha_inicio_matricula">
                                @error('fecha_inicio_matricula')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group col-md-6">
                              <label for="fecha_fin_matricula">Fecha de Cierre - Matricula: <span class="text-danger">*</span></label>
                              <input type="date" wire:model.defer="fecha_fin_matricula"  class="form-control  @error('fecha_fin_matricula') is-invalid @enderror" id="fecha_fin_matricula">
                              @error('fecha_fin_matricula')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                        </div>
                        {{-- <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="fecha_inicio">FE: <span class="text-danger">*</span></label>
                                <input type="date" wire:model.defer="fecha_inicio"  class="form-control @error('fecha_inicio') is-invalid @enderror" id="fecha_inicio">
                                @error('fecha_inicio')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group col-md-5">
                              <label for="fecha_fin">Fecha de Cierre: <span class="text-danger">*</span></label>
                              <input type="date" wire:model.defer="fecha_fin"  class="form-control  @error('fecha_fin') is-invalid @enderror" id="fecha_fin">
                              @error('fecha_fin')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                        </div> --}}

                        {{-- <div class="col-md-12 mb-3">
                            <label for="nombre" class="text-dark">Nombre del Modulo: <span class="text-danger">*</span></label>
                            <input type="text" wire:model.defer="nombre"  class="form-control @error('nombre') is-invalid @enderror" id="nombre" placeholder="Ingrese nombre del modulo">
                            @error('nombre')<small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="link" class="text-dark">Link del Modulo: <span class="text-danger">*</span></label>
                            <input type="url" wire:model.defer="link"  class="form-control @error('link') is-invalid @enderror" id="link" placeholder="https://example.com" pattern="https://.*">
                            @error('link')<small class="text-danger">{{$message}}</small>@enderror
                        </div>       
                        <div class="col-md-12 mb-3">
                            <label for="link" class="text-dark">Link del Modulo: <span class="text-danger">*</span></label>
                            <input type="url" wire:model.defer="link"  class="form-control @error('link') is-invalid @enderror" id="link" placeholder="https://example.com" pattern="https://.*">
                            @error('link')<small class="text-danger">{{$message}}</small>@enderror
                        </div>   
                        <div class="col-md-12 mb-3">
                            <label for="link" class="text-dark">Link del Modulo: <span class="text-danger">*</span></label>
                            <input type="url" wire:model.defer="link"  class="form-control @error('link') is-invalid @enderror" id="link" placeholder="https://example.com" pattern="https://.*">
                            @error('link')<small class="text-danger">{{$message}}</small>@enderror
                        </div>   
                        <div class="col-md-12 mb-3">
                            <label for="link" class="text-dark">Link del Modulo: <span class="text-danger">*</span></label>
                            <input type="url" wire:model.defer="link"  class="form-control @error('link') is-invalid @enderror" id="link" placeholder="https://example.com" pattern="https://.*">
                            @error('link')<small class="text-danger">{{$message}}</small>@enderror
                        </div>  --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-undo-alt"></i> Cancelar</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-download"></i> Guardar</button>
                    </div>
                </form>
            </div>
            </div>
        </div>


        <script>
            $(document).ready(function() {
                $('.select2').select2();
            });
        </script>