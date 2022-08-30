<div class="{{ $vermodal ? 'modal fade show' : 'modal fade' }}" id="exampleModal" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true" style=" {{ $vermodal ? 'display: block;' : 'display: none' }}"
    aria-modal="{{ $vermodal ? 'true' : '' }}" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-white cabecera-modal">
                <h5 class="modal-title" id="exampleModalLabel">Revision Tarea</h5>
                <button type="button" class="btn-close btn-close-white " wire:click="cancelar"
                    aria-label="Close"></button>
            </div>
            <form  wire:submit.prevent="calificar">
                <div class="modal-body">
                    <div class="tit2">
                        <label>Tarea enviada por:&nbsp;<b>{{ $name_student }}</b></label><br>
                        <div class="row mt-3">
                            <label for="nota" class="col-sm-8 col-form-label">Calificacion sobre los 20
                                puntos:</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="nota" required min="0"
                                    max="20" wire:model.defer="qualification">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-cancel" wire:click="cancelar"><i
                            class="fa-solid fa-xmark fa-1x"></i> Cerrar</button>
                    <button type="submit" class="btn btn-primario"><i class="fa-solid fa-floppy-disk fa-1x"></i>
                        Guardar</button>
                </div>
            </form>

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
        });
    }
</script>
