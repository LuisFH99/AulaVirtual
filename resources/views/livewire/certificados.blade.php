<div class="mx-4 row">
    <div class="col-md-6 p-3">
        
        @if ($curso_id > 0 && $matricula->response == 0)
            
            <div class="border"  style="display:flex; flex-direction: column; height: 600px;">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScr0TpjacE0oiVJic8mIH_5765Z5GY9x-kmSs1qFb2MhHDTag/viewform?embedded=true" width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
                
            </div>
            <div class="card">
                <button class="btn btn-success" wire:click="validar({{$matricula->id}})"><i class="fa-regular fa-floppy-disk" style="color: white; font-size: 20px"></i> Complete la encuesta</button>
            </div>
        @else
            <div class="mb-4">
                <small class="fw-bold">Perfil > Vista Previa del Certificado <span class="text-danger">*Seleccionar Curso</span></small>
            </div>
            <img class="shadow p-0 bg-body rounded" src="{{ asset('img/graduacion.webp') }}" style="width: 100%;" alt="Imagen de Certificado"><br><br>
        @endif
    </div>
    <div class="col-md-6 p-0 mt-4">
        <div class="card p-3 mt-5 mb-4">
            <h6 class="text-dark fw-bold mb-4" style="color: #2d529f">Mis Cursos:</h6>
            <select class="form-select form-select-sm" aria-label="Default select example" wire:model.lazy='curso_id'>
                <option selected value='0'>SELECCIONAR CURSOS</option>
                @foreach ($cursos as $m)
                    <option value="{{ $m->publicacion->curso->id}}">{{ strtoupper($m->publicacion->curso->nombre) }}</option>
                @endforeach
            </select><br><br><br>
            <small class="text-muted mb-0" style="font-size: 11px"><span class="text-danger fw-bold">(*)</span>Seleccione su curso para visualizar el certificado correspondiente.</small>
        </div>
        <div class="card p-4">
            @if ($curso_id > 0)
                @if ($matricula->count())
                    <h4 class="text-dark fw-bold d-flex justify-content-center mb-3">¡Muchas felicidades!🎉🎉🎉</h4>
                    <small class="mb-2 fw-bold text-muted d-flex justify-content-center">Ahora podras descargar todos los certificados del curso y compartir tus logros.</small>
                    <hr class="mb-4">
                    <div class="row">
                        @php $cont=1 @endphp
                        @foreach ($matricula->certificados as $c)
                            <div class="mb-4">
                                <small class="text-dark">Certificado {{ $cont++ }}:</small>
                                <a class="btn btn-primario btn-sm" href="{{ asset($c->ruta) }}" download> Descargar Certificado</a>
                                <a class="btn btn-cancel btn-sm" href="{{ asset($c->ruta) }}" target="_blank">Visualizar</a>
                            </div> 
                        @endforeach
                    </div>
                @else
                    <h4 class="text-dark fw-bold d-flex justify-content-center mb-3">¡Aun no cuenta con certificados!</h4>
                    <small class="mb-4 fw-bold text-muted d-flex justify-content-center">No te rindas sigue adelante.</small>
                @endif
            @else
                <h4 class="text-dark fw-bold d-flex justify-content-center mb-3">¡Ver Certificados!</h4>
                <small class="mb-4 fw-bold text-muted d-flex justify-content-center">En esta seccion podra visualizar todos los certificados del curso.</small>
                <center><i class="far fa-image" style="width: 50%"></i></center>
            @endif
        </div><br>
    </div>
</div>
