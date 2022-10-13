
    <div class="mx-4 row">
        <div class="col-md-6 p-3">
                <div class="mb-4">
                    <small class="fw-bold" >Perfil > Certificado del Curso de {{$curso}} </small>
                </div>
                <a href="" target="_blank" ><img class="shadow p-0 bg-body rounded" src="{{ asset($ruta) }}" style="width: 100%" alt="Imagen de Certificado"></a><br><br>
        </div>
        <div class="col-md-6 p-0 mt-5"><br>
            <div class="card p-4">
                {{-- @if ($curso_id >0) --}}
                    {{-- @if ($certificado->count()) --}}
                        <h3 class="text-dark fw-bold d-flex justify-content-center my-4">¡Muchas felicidades!🎉🎉🎉</h3>
                        <small class="mb-4 text-muted d-flex justify-content-center" style="text-align: justify">Podras descargar el certificado del curso y compartir tus logros con tu familia, amigos y la comunidad.</small>
                        <small class="mb-4 text-muted d-flex justify-content-start" style="text-align: justify">Ahora cuentas con nuevos conocimiento en {{$curso}}, que te ayudaran a crecer en tu vida profesional.</small>
                        <small class="mb-4 text-muted d-flex justify-content-start" style="text-align: justify">Por parte de la direccion de la Fundacion para el desarrollo de Ancash Santiago Antunez de Mayolo, se agradece su confianza depositada en la institucion.</small>
                        <hr>

                        <div class="row">
                            <div class="col-md-6 p-4">
                                <a class="btn btn-primario btn-sm" href="{{ route('downloadCertificado', ['id'=>$certificado_id]) }}" > Descargar Certificado</a>
                                <a class="btn btn-cancel btn-sm" href={{ url('certificado'.'/'.$certificado_id) }} target="_blank">Visualizar</a>
                            </div>
                            <div class="col-md-6">
                                <small class="mb-2 text-muted">Encuentranos en:</small><br>
                                <a href="https://www.facebook.com/fundasam.unasam.1" target="_blank"><img src="{{ asset('/img/facebook.png') }}" width="30px" alt=""></a>
                                <a href="https://www.instagram.com/fundasamunasamancash/" target="_blank"><img src="{{ asset('/img/instagram.png') }}" width="30px" alt=""></a>
                                <a class="text-primary"><img src="{{ asset('/img/red.png') }}" width="30px" alt=""><small>fundasam.oficial@gmail.com</small></a>
                            </div>
                            {{-- @foreach ($publicacion->modulos as $m)
                                <div class="mb-3">
                                        <small class="text-dark">{{$m->nombre}}{{$m->id}}:</small>
                                        <button class="btn btn-primario btn-sm" wire:click.prevent="descargar ({{$m->publicacion->id}})" >Descargar Certificado</button>
                                        <button class="btn btn-cancel btn-sm" wire:click.prevent="ver ({{$m->publicacion->id}})" >Visualizar</button>
                                </div>
                            @endforeach --}}

                       
                        </div>
                    {{-- @else
                        <h4 class="text-dark fw-bold d-flex justify-content-center mb-3">¡Aun no cuenta con certificados!</h4>
                        <small class="mb-4 fw-bold text-muted d-flex justify-content-center">No te rindas sigue adelante.</small>
                    @endif --}}
                {{-- @else
                    <h4 class="text-dark fw-bold d-flex justify-content-center mb-3">¡Ver Certificados!</h4>
                    <small class="mb-4 fw-bold text-muted d-flex justify-content-center">En esta seccion podra visualizar todos los certificados del curso.</small>
                    <center><i class="far fa-image" style="width: 50%"></i></center>
                @endif --}}
            </div>
        </div>
        
    </div>

