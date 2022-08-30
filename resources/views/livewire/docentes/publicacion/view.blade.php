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
            {{-- <img src="https://aula.enppeduca.com/images/profiles/1647900951.jpeg" alt=""> --}}
            <img src="{{ asset('img/tutor.png') }}" alt="">
            <div class="description">
                @if ($publicacion->publicaciondocente->count() > 0)
                    @foreach ($publicacion->publicaciondocente as $docente)
                        <p><a href="#">{{ $docente->datos->fullname() }}</a></p>
                        <p>{{ ucwords($docente->especialidad) }}</p>
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
                                En esta sección usted podra agregar y actualizar las clases, asi como los recursos y
                                tareas de cada modulo correspondiente al curso <b>
                                    {{ ucwords($publicacion->curso->nombre) }}.</b>
                            </span>
                        </p><br>
                    </h3>
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
                                            <li>
                                                <div class="d-flex align-items-start flex-column bd-highlight mb-3">
                                                    <span>
                                                        <i class="fa-solid fa-paperclip"
                                                            style="color: black; font-size: 25px"></i>&nbsp;Link
                                                        clases&nbsp;
                                                        <a href="{{ $modulo->link }}"
                                                            class="btn btn-primary btn-sm text-white">Ingresar Link </a>
                                                    </span>
                                                </div>
                                            </li>
                                            @foreach ($modulo->temas as $tema)
                                                <li>
                                                    <div class="d-flex align-items-start flex-column bd-highlight mb-3">
                                                        <span>
                                                            <i class="fa fa-play-circle"
                                                                style="color: black; font-size: 23px""></i>&nbsp;
                                                            {{ $tema->descripcion }}&nbsp;
                                                            <button type="button"
                                                                class="btn btn-success btn-sm text-white"
                                                                wire:click.prevent="addRecurso('{{ $modulo->nombre }}','{{ $tema->descripcion }}',{{ $tema->id }})">Agregar
                                                                Recursos</button>
                                                            {{-- <a href="#"
                                                                class="btn btn-success btn-sm text-white" wire:click.prevent="addRecurso()">Agregar
                                                                Recursos</a> --}}
                                                        </span>
                                                        @foreach ($tema->recursos as $key => $recurso)
                                                            <span class="mt-2">
                                                                <a href="{{ asset($recurso->ruta) }}" class="py-2 px-5"
                                                                    download>
                                                                    <img class="fluid-img"
                                                                        src="{{ asset('img/img_tarea.svg') }}"
                                                                        width="25" alt="">&nbsp;Material
                                                                    {{ $key + 1 }}<span>:
                                                                        {{ $recurso->descripcion }}</span>
                                                                </a>
                                                                <i class="fas fa-minus-circle"
                                                                    style="color: red; font-size: 20px"
                                                                    {{-- wire:click.prevent="$emit('confirmQuitarRecurso',{{ $recurso->id }})" --}}
                                                                    wire:click.prevent="eliminarRecurso({{ $recurso->id }})"></i>
                                                            </span>
                                                        @endforeach
                                                    </div>
                                                </li>
                                            @endforeach
                                            <!-- seccion de tareas-->

                                            <li>
                                                <div class="d-flex align-items-start flex-column bd-highlight mb-3">
                                                    <span>
                                                        <i class="fa-solid fa-folder"
                                                            style="color: black; font-size: 20px"></i>&nbsp;Tareas&nbsp;
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm text-white ml-5"
                                                            wire:click.prevent="addTarea('{{ $modulo->nombre }}','{{ $modulo->id }}')">Crear
                                                            Tarea</button>
                                                    </span>
                                                    <!-- item de las tareas creadas -->
                                                    @foreach ($modulo->tareas as $key => $tarea)
                                                        @if ($modulo->id == $tarea->modulos_id)
                                                            <span>
                                                                <a href="{{ route('docentes.entregas.index',$tarea->id) }}"
                                                                    class="py-2 px-5">
                                                                    <img class="fluid-img"
                                                                        src="{{ asset('img/img_tarea.svg') }}"
                                                                        width="25"
                                                                        alt="">&nbsp;Tarea_{{ $key + 1 }}
                                                                </a>
                                                                <i class="fas fa-minus-circle "
                                                                    style="color: red; font-size: 20px"
                                                                    wire:click.prevent="eliminarTarea({{ $tarea->id }})"></i>
                                                                {{-- <i class="fa-solid fa-eye primary mr-4" style="font-size: 20px"></i> --}}
                                                            </span>
                                                        @endif
                                                    @endforeach
                                                </div>

                                            </li>

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
                Usted, podra generar un examen final con todos los temas de los modulos, seleccione <b>"Generar
                    Examen"</b> para empezar a crearlo.
                <br><br>
            </p>
            <button type="button" class="btn-card p-2" wire:click.prevent="addExamenFinal()">Generar Examen</button>
            {{-- <a href="/Cuestionario" class="btn-card p-2" style="text-decoration: none">Generar Examen</a> --}}
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
        </div>
    </div>
    @include('livewire.docentes.publicacion.modal-create')
</div>
<script>
    window.onload = function() {
        miNotificacion();
    }
</script>
