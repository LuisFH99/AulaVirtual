<div class="{{ $modalcertificado ? 'modal fade show' : 'modal fade' }}" id="exampleModal" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true"
    style=" {{ $modalcertificado ? 'display: block;' : 'display: none' }}"
    aria-modal="{{ $modalcertificado ? 'true' : '' }}" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="font-weight-bold" id="exampleModalLabel">Certificados para: {{ $nombre }}</h5>
                <button type="button" wire:click="cancelar" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="container row  ">
                    <div class="col-9 border-right border-success">
                        <label class="form-label">Subir certificados: (Tamaño maximo 3MB) <strong
                                style="color: red">*</strong></label>
                        <input type="file" class="form-control-file" id="uploadedfile" wire:model="certificados"
                            ccept="application/pdf" multiple>
                        @error('cotizacion')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-3 border-right border-success d-flex justify-content-end  align-items-center">
                        <button class="btn btn-primary btn-sm" wire:click="uploadcertificates"><i
                                class="fas fa-upload"></i> Cargar Certificados</button>
                    </div>

                    <div class="container mt-3 list-certificates">
                        <div class="row">
                            @if (!is_null($listcertificados) || $listcertificados->count() > 0)
                                @foreach ($listcertificados as $certifiado)
                                    <div class="col-6 p-2 item">
                                        <div class="row">
                                            <div class="col-2 text-center"><i class="fas fa-solid fa-medal"></i></div>
                                            <div class="col-7">
                                                <h5>Cerificado Emitido</h5>
                                            </div>
                                            <div class="col-2">
                                                <div class="btn-group" role="group">
                                                    <button class="btn btn-outline-danger btn-sm outline"
                                                        wire:click="deletecertificate({{ $certifiado->id }})"><i
                                                            class="fas fa-minus-circle"></i></button>

                                                    <a href="{{ asset($certifiado->ruta) }}" target="_blank"> <button
                                                            class="btn btn-outline-info btn-sm"><i
                                                                class=" fas fa-solid fa-eye"></i></button></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-12 p-2 item">
                                    <h5>No se encontraron certificados</h5>
                                </div>
                            @endif

                        </div>

                    </div>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-danger " wire:click="cancelar"> <i class="far fa-times-circle mr-1"></i>
                    Cancelar</button>

            </div>
        </div>
    </div>
</div>
@if ($modalcertificado)
    <div class="modal-backdrop fade show"></div>
@endif

<script>
    function miNotificacion() {
        Livewire.on('notify', function(datos) {
            $(document).Toasts('create', {
                class: datos.modo,
                title: 'Mensaje de Sistema',
                body: datos.mensaje,
                autohide: true,
                delay: 950
            })
            document.getElementById("uploadcertificates").value = "";
        });
    }
</script>
