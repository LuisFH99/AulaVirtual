<div class="row justify-content-center">
    <div class="col-md-10 sesion_left">
        <div class='embed-container'>
            <div style="align-content: center">
                {{-- <iframe id="iframe_vimeo"
                    src="https://mega.nz/embed/Td9EhSIa#gwVV0_ZvBGV4Nj-AcbMKQhLKYm2S__68QStUOJXZAzU"
                    style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0"
                    allow="autoplay; fullscreen; picture-in-picture" allowfullscreen>
                </iframe> --}}
                {{-- <iframe
                    src="https://player.vimeo.com/video/734881392?h=e146cb96c3&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                    style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                    allowfullscreen title="video"></iframe> --}}
                {{-- <iframe width="640" height="360" frameborder="0" src="https://mega.nz/embed/Td9EhSIa#gwVV0_ZvBGV4Nj-AcbMKQhLKYm2S__68QStUOJXZAzU" allowfullscreen ></iframe> --}}
                <video style="position:absolute;top:0;left:0;width:100%;height:100%;" controls autoplay>
                    <source src="{{ asset($linkvideo) }}">
                </video>
              
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6 session_details mt-0 mb-3">
                <div class="col-md-12 mb-2 pt-2">
                    <h5 class="font-bold tit"><a
                            href="{{ route('detallecurso.index', $tema->modulo->publicacion->id) }}">Curso:
                            {{ $tema->modulo->publicacion->curso->nombre }} -
                            {{ $tema->modulo->nombre }}</a></h5>
                    <hr style="height: 0.5px;">
                    <div class="detail">
                        <div class="docente">
                            <i class="fa-solid fa-clipboard fa-2x" style="color: #2d529f"></i>&nbsp;&nbsp;<span>Tema:
                                {{ $tema->descripcion }}</span>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="docente">
                            <img src="https://aula.enppeduca.com/images/profiles/1647913293.jpeg" alt="">
                            @foreach ($tema->modulo->publicacion->publicaciondocente as $docente)
                                <span>Docente: {{ $docente->datos->fullname() }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 sesion_right">
                <div class="content">
                    <ul class="nav nav-pills mb-3" id="pills-tab comments" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills_2" data-bs-toggle="pill"
                                data-bs-target="#pillstab_2" type="button" role="tab" aria-controls="pillstab_2"
                                aria-selected="true">
                                <span>Material de Apoyo:</span>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="container">
                            <div class="row ml-2">
                                @foreach ($tema->recursos as $key => $recurso)
                                    <div class="col-md-6 downloads"><a href="{{ asset($recurso->ruta) }}" download
                                            class="downloads__link">
                                            <i class="fas fa-download"></i>Material
                                            {{ $key + 1 }}<span>{{ $recurso->descripcion }}</span></a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="botones mt-1">
                    <div class="regresar">
                        <a href="{{ route('detallecurso.index', $tema->modulo->publicacion->id) }}"
                            class="btn btn-regresar"><i class="fa fa-reply"></i> Listado de
                            Temas</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
