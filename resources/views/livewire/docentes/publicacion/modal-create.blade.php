<div class="{{ $vermodal ? 'modal fade show' : 'modal fade' }}" id="exampleModal" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true" style=" {{ $vermodal ? 'display: block;' : 'display: none' }}"
    aria-modal="{{ $vermodal ? 'true' : '' }}" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            @if ($fromrecurso)
                <div class="modal-header">
                    <h5 class="font-weight-bold" id="exampleModalLabel">
                        Agregar Nuevo Recurso: {{ $moduloselect }}</h5>
                    <button type="button" wire:click="cancelar" class="btn-close" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <p style="font-family: font-semibold" style="text-align: justify"><i class="fa-solid fa-angle-right"
                            style="font-size: 20px"></i>&nbsp;Estimado docente, en este apartado
                        podra subir el material del tema {{ $temaselect }}, para sus estudiantes.
                    </p>
                    <div>
                        <label class="form-label">
                            Titulo o Nombre:
                        </label>
                        <input type="text" class="form-input" name="nombre" id="nombre" wire:model="nombre">
                        @error('nombre')
                            <br>
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div>
                        <label class="form-label mt-4">
                            <i class="fa-solid fa-folder" style="font-size: 20px"></i> Archivo del material
                        </label>
                        <input type="file" class="form-control-file" wire:model="doc_recurso" id="uploadedfile">
                        @error('doc_recurso')
                            <br>
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    {{-- <div class="drop-zone mt-2">
                        <i class="icon fa-solid fa-cloud-arrow-up"></i>
                        <span class="drop-zone__prompt">Suelte el archivo aquí o haga clic para
                            cargar</span>
                        <input type="file" name="myFile" class="drop-zone__input">
                    </div><br> --}}

                </div>
                <div class="modal-footer">
                    
                    <button wire:loading wire:target="doc_recurso" class="btn btn-primario text-primary" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Cargando Archivo...
                    </button>

                    <div wire:loading.remove wire:target="doc_recurso">
                        <button type="button" class="btn btn-primario" wire:click="guardarRecurso"><i class="fa-solid fa-paper-plane" style="font-size: 20px"></i>&nbsp;Guardar Recurso</button>
                    </div>

                    <button type="button" class="btn btn-cancel" wire:click="cancelar"><i class="fa-solid fa-ban"
                            style="font-size: 20px"></i>&nbsp;Cancelar</button>
                </div>
            @elseif ($formexamen)
                <div class="modal-header">
                    <h5 class="font-weight-bold" id="exampleModalLabel">
                        Generar Examen {{ isset($moduloselect) ? ' - ' . $moduloselect : 'Final' }} del curso:
                        {{ $nombre_curso }}</h5>
                    <button type="button" wire:click="cancelar" class="btn-close" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <p style="font-family: font-semibold; text-align: justify">
                                Estimado docente, en este apartado
                                podra generar el examen de la asignatura correspondiente.
                            </p>
                        </div>
                        <div class="col-6">
                            <div>
                                <label class="form-label">
                                    Duracion en minutos:
                                </label>
                                <input type="text" class="form-control" name="duracion" id="duracion"
                                    wire:model="duracion" style="width: 65px">
                                @error('duracion')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div>
                                <label class="form-label">
                                    Peso de examen:
                                </label>
                                <input type="number" class="form-control" style="width: 65px" min="1"
                                    max="5" wire:model="peso" required="">
                                @error('peso')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                {{-- <input type="text" class="form-input" name="peso" id="peso" wire:model="peso"> --}}
                            </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primario" wire:click="guardarExamen"><i
                            class="fa-solid fa-paper-plane" style="font-size: 20px"></i>&nbsp;Generar Examen</button>
                    <button type="button" class="btn btn-cancel" wire:click="cancelar"><i class="fa-solid fa-ban"
                            style="font-size: 20px"></i>&nbsp;Cancelar</button>
                </div>
            @elseif ($formforo)
                <div class="modal-header">
                    <h5 class="font-weight-bold" id="exampleModalLabel">Creacion de Foro&nbsp;{{ $moduloselect }}</h5>
                    <button type="button" wire:click="cancelar" class="btn-close" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <p style="font-family: font-semibold" style="text-align: justify"><i class="fa-solid fa-angle-right"
                            style="font-size: 20px"></i>&nbsp;Estimado docente, en este apartado
                        podra crear un foro dirigido a los estudiantes.
                    </p>
                    <div>
                        <label class="form-label mb-2">
                            Añade una descripcion:
                        </label>
                        <textarea class="form-control" wire:model="descripcion" cols="50" placeholder="Descripcion de Foro..."
                            id="floatingTextarea" style="height: 10vh" required></textarea>
                        @error('descripcion')<small class="text-danger">{{ $message }}</small>@enderror
                        {{-- <input type="text" class="form-input" name="nombre" id="nombre" wire:model="nombre"> --}}
                    </div>
                    <div class="mt-4">
                        <label class="form-label mb-2">
                            <i class="fa-solid fa-folder" style="font-size: 20px"></i> Añade un documento:
                        </label>&nbsp;
                        <input type="file" class="form-control-file" wire:model="adjunto" id="uploadedfile">
                        @error('adjunto')<small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                </div>
                <div class="modal-footer">
                    
                    <button wire:loading wire:target="adjunto" class="btn btn-primario text-primary" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Cargando Archivo...
                    </button>
                    
                    <div wire:loading.remove wire:target="adjunto">
                    <button type="button" class="btn btn-primario" wire:click="guardarForo"><i class="fa-solid fa-paper-plane" style="font-size: 20px"></i>&nbsp;Generar Foro</button>
                    </div> 
                    <button type="button" class="btn btn-cancel" wire:click="cancelar"><i class="fa-solid fa-ban" style="font-size: 20px"></i>&nbsp;Cancelar</button>
                </div>
            @else
                <div class="modal-header">
                    <h5 class="font-weight-bold" id="exampleModalLabel">
                        Agregar Nueva Tarea: {{ $moduloselect }}</h5>
                    <button type="button" wire:click="cancelar" class="btn-close" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">

                    <p style="font-family: font-semibold" style="text-align: justify"><i class="fa-solid fa-angle-right"
                            style="font-size: 20px"></i>&nbsp;Estimado docente, en este apartado
                        podra asignar una tarea a los estudiantes.
                    </p>
                    <div>
                        <label class="form-label">
                            Añade una descripcion:
                        </label>
                        <textarea class="form-control" wire:model="nombre" cols="50" placeholder="Descripcion de Tarea"
                            id="floatingTextarea" style="height: 10vh" required></textarea>
                        @error('nombre')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        {{-- <input type="text" class="form-input" name="nombre" id="nombre" wire:model="nombre"> --}}
                    </div>

                    <div class="mt-4">
                        <label class="form-label">
                            Designa ultima fecha de entrega:
                        </label>
                        <input class="form-input-fecha" type="date" name="fecha" id="fecha"
                            wire:model="fecha" required>
                        @error('fecha')
                            <br>
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <label class="form-label">
                            <i class="fa-solid fa-folder" style="font-size: 20px"></i> Añade un documento:
                        </label>
                        <input type="file" class="form-control-file" wire:model="doc_recurso" id="uploadedfile">
                    </div>
                    {{-- <div class="drop-zone mt-2">
                        <i class="icon fa-solid fa-cloud-arrow-up"></i>
                        <span class="drop-zone__prompt">Suelte el archivo aquí o haga clic para
                            cargar</span>
                        <input type="file" name="myFile" class="drop-zone__input">
                    </div><br> --}}

                </div>
                <div class="modal-footer">

                    <button wire:loading wire:target="doc_recurso" class="btn btn-primario text-primary" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Cargando Archivo...
                    </button>

                    <div wire:loading.remove wire:target="doc_recurso">
                        <button type="button" class="btn btn-primario" wire:click="guardarTarea"><i class="fa-solid fa-paper-plane" style="font-size: 20px"></i>&nbsp;Generar Tarea</button>
                    </div>
                    <button type="button" class="btn btn-cancel" wire:click="cancelar"><i class="fa-solid fa-ban" style="font-size: 20px"></i>&nbsp;Cancelar</button>
                </div>
            @endif
        </div>
    </div>
</div>
@if ($vermodal)
    <div class="modal-backdrop fade show"></div>
@endif
<script>
    function miNotificacion() {
        Livewire.on('alertaSistema', function(datos) {
            $(document).ready(() => {
                toastr[datos.modo](datos.mensaje, "Mensaje del Sistema");
            });
            document.getElementById("uploadedfile").value = "";
        });
    }
</script>
