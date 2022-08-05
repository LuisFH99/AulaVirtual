@extends('layouts.web')
@section('content')
<section class="sec4 mt-0" id="curso">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 px-0">
                <div class="slider" style="background-image: url('https://images.pexels.com/photos/546819/pexels-photo-546819.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')">
                    <h1>Programacion</h1>
                </div>
            </div>
{{-- Descripcion del curso --}}
            <div class="col-md-8 curso_left">
                <h1>Programacion</h1>
                <h3>Diplomado</h3>
                <div class="profesor">
                    <img src="https://aula.enppeduca.com/images/profiles/1647900951.jpeg" alt="">
                    <div class="description">
                        <p><a href="#">Víctor Villanueva Sandoval</a></p>
                        <p>Programador</p>
                    </div>
                </div>
                <div class="cant_estudiantes">
                    <i class="fas fa-users"></i> <span>206  estudiantes <strong>Actualizado al 07/2022</strong></span> 
                </div>
                <div class="description">
                    <h1>Descripción</h1>
                    <div class="text">
                        <div class="pt-3 " style="-webkit-font-smoothing: antialiased; color: rgb(85, 85, 85); font-family: "Open Sans", Helvetica, sans-serif; font-size: 14px; padding-top: 1rem !important;">
                            <h3 class="font-weight-bold" style="margin-bottom: 0.5rem; line-height: 1.2; font-size: 1.75rem; -webkit-font-smoothing: antialiased; color: rgb(51, 51, 51); font-family: "Open Sans", Helvetica, sans-serif;">
                                <p style="margin-bottom: 30px; -webkit-font-smoothing: antialiased;">
                                    <span style="font-weight: inherit; -webkit-font-smoothing: antialiased;">
                                        Usted podra agregar y actualizar las clases, asi como los recursos y tareas de cada modulo respectivo................
                                    </span>
                                </p><br>
                            </h3>
                        </div>
                    </div>
                </div>
{{-- Acordion de los modulos --}}
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="lista_envivo">
                        </div>
                    </div>

                    <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="temario">
                            <div class="accordion" id="accordion_temas">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panel_0">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelColl_0" aria-expanded="true" aria-controls="panelColl_0">
                                            Html Intensivo
                                        </button>
                                    </h2>
                                    <div id="panelColl_0" class="accordion-collapse collapse collapse" aria-labelledby="panel_0">
                                            <div class="accordion-body">
                                                <ul class="sesiones">
                                                    <li>
                                                        <div class="d-flex align-items-start flex-column bd-highlight mb-3">
                                                        <span>
                                                            <i class="fa-solid fa-paperclip" style="color: black"></i>&nbsp;Link clases&nbsp;
                                                            <a href="/CrearClase" class="btn btn-primary btn-sm text-white">Insertar Link </a>                                                        </span>
                                                        <a href="/CrearRecursos" class="py-2 px-5" title="Click para editar">
                                                            <img class="fluid-img" src="{{ asset('img/img_tarea.svg') }}" width="25" alt="">&nbsp;Descripcion
                                                        </a> 
                                                        </div>
                                                        {{-- <a href="/CrearClase" class="btn btn-primary btn-sm text-white">Insertar Link </a> --}}
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-start flex-column bd-highlight mb-3">
                                                        <span>
                                                            <i class="fa fa-play-circle" style="color: black"></i>&nbsp;Aspectos generales I&nbsp;
                                                            <a href="/CrearRecursos" class="btn btn-success btn-sm text-white">Insertar Recursos</a>
                                                        </span>
                                                        <a href="/CrearRecursos" class="py-2 px-5" title="Click para editar">
                                                            <img class="fluid-img" src="{{ asset('img/img_tarea.svg') }}" width="25" alt="">&nbsp;Recurso_01
                                                        </a>     
                                                        <a href="/CrearRecursos" class="py-2 px-5" title="Click para editar">
                                                            <img class="fluid-img" src="{{ asset('img/img_tarea.svg') }}" width="25" alt="">&nbsp;Recurso_02
                                                        </a>  
                                                        </div>
                                                        {{-- <a href="/CrearRecursos" class="btn btn-success btn-sm text-white">Insertar Recursos</a> --}}
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-start flex-column bd-highlight mb-3">
                                                        <span>
                                                            <i class="fa fa-play-circle" style="color: black"></i>&nbsp;Aspectos generales II&nbsp;
                                                            <a href="/CrearRecursos" class="btn btn-success btn-sm text-white">Insertar Recursos</a>
                                                        </span>
                                                        <a href="/CrearRecursos" class="py-2 px-5" title="Click para editar">
                                                            <img class="fluid-img" src="{{ asset('img/img_tarea.svg') }}" width="25" alt="">&nbsp;Recurso_01
                                                        </a>     
                                                        <a href="/CrearRecursos" class="py-2 px-5" title="Click para editar">
                                                            <img class="fluid-img" src="{{ asset('img/img_tarea.svg') }}" width="25" alt="">&nbsp;Recurso_02
                                                        </a>  
                                                        
                                                        </div>
                                                        {{-- <a href="/CrearRecursos" class="btn btn-success btn-sm text-white">Insertar Recursos</a> --}}
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-start flex-column bd-highlight mb-3">
                                                            <span>
                                                                <i class="fa fa-play-circle" style="color: black"></i>&nbsp;Aspectos generales III&nbsp;
                                                                <a href="/CrearRecursos" class="btn btn-success btn-sm text-white">Insertar Recursos</a>
                                                            </span>
                                                            <a href="/CrearRecursos" class="py-2 px-5" title="Click para editar">
                                                                <img class="fluid-img" src="{{ asset('img/img_tarea.svg') }}" width="25" alt="">&nbsp;Recurso_01
                                                            </a>     
                                                            <a href="/CrearRecursos" class="py-2 px-5" title="Click para editar">
                                                                <img class="fluid-img" src="{{ asset('img/img_tarea.svg') }}" width="25" alt="">&nbsp;Recurso_02
                                                            </a>     
                                                        </div>
                                                        {{-- <a href="/CrearRecursos" class="btn btn-success btn-sm text-white">Insertar Recursos</a> --}}

                                                    </li>
                                                    <!-- seccion de tareas-->
                                                    <li>
                                                        <div class="d-flex align-items-start flex-column bd-highlight mb-3">
                                                        <span>
                                                            <i class="fa-solid fa-folder" style="color: black"></i>&nbsp;Tareas&nbsp;
                                                            <a href="/CrearTarea" class="btn btn-danger btn-sm text-white ml-5">Crear Tarea</a>
                                                        </span>
                                                        <!-- item de las tareas creadas -->
                                                        <a href="/CrearRecursos" class="py-2 px-5" title="Click para editar">
                                                            <img class="fluid-img" src="{{ asset('img/img_tarea.svg') }}" width="25" alt="">&nbsp;Tarea_01
                                                        </a>      
                                                        <a href="/CrearRecursos" class="py-2 px-5" title="Click para editar">
                                                            <img class="fluid-img" src="{{ asset('img/img_tarea.svg') }}" width="25" alt="">&nbsp;Tarea_01
                                                        </a> 
                                                        </div>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{-- Examen Final --}}
                <div class="examensubir" id="link_preguntas">
                    <h1>Examen final</h1>
                        <p>
                            Usted, podra generar un examen final con todos los temas de los modulos, seleccione <b>"Generar Examen"</b> para empezar a crearlo.
                            <br><br>
                        </p>
                    <a href="/Cuestionario" class="btn-card p-2" style="text-decoration: none">Generar Examen</a>
                </div>
            </div>
            <div class="col-md-4 curso_right">
                <div class="contenido">
{{-- Informacion del curso --}}
                    <div class="info">
                        <h3>Información del curso:</h3>
                        <ul>
                            <li><i class="fas fa-clock"></i> <span>Duración: 220 horas académicas</span></li>
                            <li><i class="fas fa-book"></i> <span>Categoría: Programacion</span></li>
                            <li><i class="fas fa-layer-group"></i> <span>Nivel: Intermedio</span></li>
                            <li><i class="fas fa-clipboard-check"></i> <span>3 módulos</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection



 
