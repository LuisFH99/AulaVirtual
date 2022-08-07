<div class="{{ $vermodal ? 'modal fade show' : 'modal fade' }}" id="exampleModal" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true" style=" {{ $vermodal ? 'display: block;' : 'display: none' }}"
    aria-modal="{{ $vermodal ? 'true' : '' }}" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="font-weight-bold" id="exampleModalLabel">Matricula Masiva</h5>
                <button type="button" wire:click="cancelar" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-12">
                        <label class="form-label">Subir lista matricula: (Tamaño maximo 3MB) <strong
                                style="color: red">*</strong></label>
                        <input type="file" class="form-control-file" id="uploadedfile" wire:model="lista"
                            accept="application/xlxs">
                        @error('cotizacion')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="modal-footer text-center d-flex justify-content-center align-items-end">

                <button class="btn btn-primary mr-1" wire:click="registrar"> <i class="fas fa-tasks"></i>
                    Registrar</button>
                <button class="btn btn-danger " wire:click="cancelar"> <i class="far fa-times-circle mr-1"></i>
                    Cancelar</button>

            </div>
        </div>
    </div>
</div>
@if ($vermodal)
    <div class="modal-backdrop fade show"></div>
@endif

<script>
    function miNotificacion() {
        Livewire.on('alertaArea', function(datos) {
            $(document).Toasts('create', {
                class: datos.modo,
                title: 'Mensaje de Sistema',
                body: datos.mensaje,
                autohide: true,
                delay: 950
            })
            document.getElementById("uploadedfile").value = "";
        });
    }
</script>
