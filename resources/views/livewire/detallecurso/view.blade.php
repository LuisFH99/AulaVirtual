<div class="row justify-content-center">
    <div class="col-md-12 px-0">
        <div class="slider"
            style="background-image: url('https://images.pexels.com/photos/546819/pexels-photo-546819.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')">
            <h1>{{ $publicacion->curso->nombre }}</h1>
        </div>
    </div>
    {{-- Descripcion del curso --}}
    <div class="col-md-8 curso_left">
        <h1>{{ $publicacion->curso->nombre }}</h1>
        <h3>{{ $publicacion->tipopublicacion->tipo }}</h3>
        <div class="profesor">
            <img src="https://aula.enppeduca.com/images/profiles/1647900951.jpeg" alt="">
            <div class="description">
                @if ($publicacion->publicaciondocente->count() > 0)
                    @foreach ($publicacion->publicaciondocente as $docente)
                        <p><a href="#">{{ $docente->datos->fullname() }}</a></p>
                        <p>{{ $docente->especialidad }}</p>
                    @endforeach

                @endif
            </div>
        </div>
        <div class="cant_estudiantes">
            <i class="fas fa-users"></i> <span>{{ $publicacion->matriculados->count() }} estudiantes <strong>Actualizado
                    al {{ date('d/m/Y', strtotime($publicacion->fecha_inicio)) }}</strong></span>
        </div>
        <div class="description">
            <h1>Descripción</h1>
            <div class="text">
                <div class="pt-3 "
                    style="-webkit-font-smoothing: antialiased; color: rgb(85, 85, 85); font-family: "Open Sans",
                    Helvetica, sans-serif; font-size: 14px; padding-top: 1rem !important;">
                    <h3 class="font-weight-bold"
                        style="margin-bottom: 0.5rem; line-height: 1.2; font-size: 1.75rem; -webkit-font-smoothing: antialiased; color: rgb(51, 51, 51); font-family: "Open
                        Sans", Helvetica, sans-serif;">
                        <p style="margin-bottom: 30px; -webkit-font-smoothing: antialiased;">
                            <span style="font-weight: inherit; -webkit-font-smoothing: antialiased;">
                                {{ $publicacion->curso->descripcion }} </span>
                        </p><br>
                    </h3>
                    <h3 class="font-weight-bold "
                        style="margin-bottom: 0.5rem; line-height: 1.2; font-size: 1.75rem; -webkit-font-smoothing: antialiased; color: rgb(51, 51, 51); font-family: "Open
                        Sans", Helvetica, sans-serif;">¿Qué voy a aprender?</h3>
                    <p class="pt-3"
                        style="margin-bottom: 30px; -webkit-font-smoothing: antialiased; padding-top: 1rem !important;">
                    </p>
                    <p style="margin-bottom: 30px; -webkit-font-smoothing: antialiased;">
                        {{ $publicacion->curso->subdescripcion }}
                    </p>
                </div>
            </div>
        </div>

        {{-- Acordion de los modulos --}}
        <div class="tab-content" id="pills-tabContent">
            {{-- <div class="tab-pane fade " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="lista_envivo">
                </div>
            </div> --}}

            <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                aria-labelledby="pills-profile-tab">
                <div class="temario">
                    <div class="accordion" id="accordion_temas">
                        @foreach ($publicacion->modulos as $modulo)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panel_{{ $modulo->id }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelColl_{{ $modulo->id }}" aria-expanded="true"
                                        aria-controls="panelColl_{{ $modulo->id }}">
                                        {{ $modulo->nombre }}
                                    </button>
                                </h2>
                                <div id="panelColl_{{ $modulo->id }}" class="accordion-collapse collapse collapse"
                                    aria-labelledby="panel_{{ $modulo->id }}">
                                    <div class="accordion-body">
                                        <ul class="sesiones">
                                            @foreach ($modulo->temas as $tema)
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-play-circle"></i>
                                                        {{ $tema->descripcion }}<button class="ver">Ver</button>
                                                    </a>
                                                    
                                                    <p>{{ date('d/m/Y',strtotime($tema->fecha)) }}</p>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        {{-- Examen Final --}}
        <div class="examensubir" id="link_preguntas">
            <h1>Examen final</h1>
            <p>
                El Examen se debe resolver de forma total, teniendo en cuenta la fecha de cese de la activación
                de su cuenta.
                Antes de resolver el Examen se sugiere ver todos los videos del curso.
                <br><br>
            </p>
            <a href="#" class="btn-card p-2" style="text-decoration: none">Presentar Examen</a>
        </div>
    </div>
    <div class="col-md-4 curso_right">
        <div class="contenido">
            {{-- Informacion del curso --}}
            <div class="info">
                <h3>Información del curso:</h3>
                <ul>
                    <li><i class="fas fa-clock"></i> <span>Duración: {{ $publicacion->horas }} horas académicas</span>
                    </li>
                    <li><i class="fas fa-book"></i> <span>Categoría:
                            {{ $publicacion->curso->categoria->nombre }}</span></li>
                    <li><i class="fas fa-layer-group"></i> <span>Nivel:
                            {{ $publicacion->nivelpublicacion->nivel }}</span></li>
                    <li><i class="fas fa-clipboard-check"></i> <span>{{ $publicacion->modulos->count() }}
                            módulos</span></li>
                </ul>
            </div>
            <div class="preguntas">
                <h3>Preguntas frecuentes</h3>
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="head_1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_1" aria-expanded="true" aria-controls="collapse_1">
                                ¿Dónde encuentro la evaluación y cuántas son?
                            </button>
                        </h2>
                        <div id="collapse_1" class="accordion-collapse collapse" aria-labelledby="head_1">
                            <div class="accordion-body">
                                <p>
                                    La evaluación final estará ubicada en el último módulo de cada programa
                                    educativo.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="head_2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_2" aria-expanded="true" aria-controls="collapse_2">
                                ¿Cuál es la cantidad de preguntas mínimas que debo responder para aprobar?
                            </button>
                        </h2>
                        <div id="collapse_2" class="accordion-collapse collapse" aria-labelledby="head_2">
                            <div class="accordion-body">
                                <p>Es 8 preguntas, siendo su nota mínima 16.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="head_3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_3" aria-expanded="true" aria-controls="collapse_3">
                                ¿Me dan certificado si desapruebo?
                            </button>
                        </h2>
                        <div id="collapse_3" class="accordion-collapse collapse" aria-labelledby="head_3">
                            <div class="accordion-body">
                                <p>
                                    No, en caso obtenga una nota menor a 16 el sistema le permitirá rendir su
                                    examen de nuevo.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="head_4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_4" aria-expanded="true" aria-controls="collapse_4">
                                ¿Hasta cuándo tengo habilitado mi aula virtual?
                            </button>
                        </h2>
                        <div id="collapse_4" class="accordion-collapse collapse" aria-labelledby="head_4">
                            <div class="accordion-body">
                                <p>
                                    Su aula virtual estará disponible durante un año desde la fecha en que
                                    recibe su acceso.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="head_5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_5" aria-expanded="true" aria-controls="collapse_5">
                                ¿Puedo descargar los vídeos?
                            </button>
                        </h2>
                        <div id="collapse_5" class="accordion-collapse collapse" aria-labelledby="head_5">
                            <div class="accordion-body">
                                <p>
                                    No, los vídeos de todas las clases no tienen habilitado la opción de
                                    descarga, por ser autoría de la Escuela y de nuestros docentes.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="head_6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_6" aria-expanded="true" aria-controls="collapse_6">
                                ¿Serio habra classes presenciales?
                            </button>
                        </h2>
                        <div id="collapse_6" class="accordion-collapse collapse" aria-labelledby="head_6">
                            <div class="accordion-body">
                                <p>No</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
