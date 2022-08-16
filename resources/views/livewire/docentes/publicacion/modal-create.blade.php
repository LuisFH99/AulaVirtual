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
                    </div>
                    <div>
                        <label class="form-label mt-4">
                            <i class="fa-solid fa-folder" style="font-size: 20px"></i> Archivo del material
                        </label>
                        <input type="file" class="form-control-file" wire:model="doc_recurso"
                            accept='application/pdf'>
                    </div>
                    {{-- <div class="drop-zone mt-2">
                        <i class="icon fa-solid fa-cloud-arrow-up"></i>
                        <span class="drop-zone__prompt">Suelte el archivo aquí o haga clic para
                            cargar</span>
                        <input type="file" name="myFile" class="drop-zone__input">
                    </div><br> --}}

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primario" wire:click="guardarRecurso"><i
                            class="fa-solid fa-paper-plane" style="font-size: 20px"></i>&nbsp;Guardar Recurso</button>
                    <button type="button" class="btn btn-cancel" wire:click="cancelar"><i class="fa-solid fa-ban"
                            style="font-size: 20px"></i>&nbsp;Cancelar</button>
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
                        <input type="text" class="form-input" name="nombre" id="nombre" wire:model="nombre">
                    </div>
                    <div>
                        <label class="form-label">
                            Designa ultima fecha de entrega:
                        </label>
                        <input class="form-input-fecha" type="date" name="fecha" id="fecha" required>
                    </div>
                    <div>
                        <label class="form-label mt-4">
                            <i class="fa-solid fa-folder" style="font-size: 20px"></i> Añade un documento:
                        </label>
                        <input type="file" class="form-control-file" wire:model="doc_recurso"
                            accept='application/pdf'>
                    </div>
                    {{-- <div class="drop-zone mt-2">
                        <i class="icon fa-solid fa-cloud-arrow-up"></i>
                        <span class="drop-zone__prompt">Suelte el archivo aquí o haga clic para
                            cargar</span>
                        <input type="file" name="myFile" class="drop-zone__input">
                    </div><br> --}}

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primario" wire:click="guardarTarea"><i
                            class="fa-solid fa-paper-plane" style="font-size: 20px"></i>&nbsp;Generar Tarea</button>
                    <button type="button" class="btn btn-cancel" wire:click="cancelar"><i class="fa-solid fa-ban"
                            style="font-size: 20px"></i>&nbsp;Cancelar</button>
                </div>

            @endif

        </div>
    </div>
</div>
@if ($vermodal)
    <div class="modal-backdrop fade show"></div>
@endif
