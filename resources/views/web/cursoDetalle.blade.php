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
                                        Las empresas demandan desarrolladores web que dominen y tengan experiencia en los tres componentes básicos de programación: HTML, CSS y JavaScript. También es sumamente importante aprender sobre CSS y frameworks CSS como Backbone, Bootstrap y Foundation. Notarás que muchas descripciones de trabajo lo requieren.                                    </span>
                                </p><br>
                            </h3>
                            <h3 class="font-weight-bold " style="margin-bottom: 0.5rem; line-height: 1.2; font-size: 1.75rem; -webkit-font-smoothing: antialiased; color: rgb(51, 51, 51); font-family: "Open Sans", Helvetica, sans-serif;">¿Qué voy a aprender?</h3>
                                <p class="pt-3" style="margin-bottom: 30px; -webkit-font-smoothing: antialiased; padding-top: 1rem !important;"></p>
                                    <p style="margin-bottom: 30px; -webkit-font-smoothing: antialiased;">
                                        En este curso aprendera diferentes lenguajes de programación para el diseño del propio sitio web, así como aplicaciones web que formen parte de una página.
                                    </p>
                        </div>
                    </div>
                </div>
                
                {{-- <ul class="nav nav-pills mb-3 pills_curso" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link d-none " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                            <i class="fas fa-video"></i> Clases en vivo
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link d-none active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                            <i class="fa fa-play-circle"></i> Clases grabadas
                        </button>
                        <div class="temario ">
                            <h1>Temas del curso</h1>
                        </div>
                    </li>
                </ul> --}}
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
                                                        <a href="#">
                                                            <i class="fa fa-play-circle"></i> Aspectos generales I<button class="ver">Ver</button>                                                        </a>
                                                        <p>00:24:03</p>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-play-circle"></i> Aspectos generales II <button class="ver">Ver</button>                                                        </a>
                                                        <p>00:37:08</p>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-play-circle"></i> Aspectos generales III <button class="ver">Ver</button>                                                        </a>
                                                        <p>00:29:00</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panel_1">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelColl_1" aria-expanded="true" aria-controls="panelColl_1">
                                            Css Intensivo
                                        </button>
                                    </h2>
                                    <div id="panelColl_1" class="accordion-collapse collapse collapse" aria-labelledby="panel_1">
                                        <div class="accordion-body">
                                            <ul class="sesiones">
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-play-circle"></i> Aspectos generales I<button class="ver">Ver</button>                                                        </a>
                                                    <p>00:24:03</p>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-play-circle"></i> Aspectos generales II <button class="ver">Ver</button>                                                        </a>
                                                    <p>00:37:08</p>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-play-circle"></i> Aspectos generales III <button class="ver">Ver</button>                                                        </a>
                                                    <p>00:29:00</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panel_2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelColl_2" aria-expanded="true" aria-controls="panelColl_2">
                                           JavaScript Intensivo
                                        </button>
                                    </h2>
                                    <div id="panelColl_2" class="accordion-collapse collapse collapse" aria-labelledby="panel_2">
                                        <div class="accordion-body">
                                            <ul class="sesiones">
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-play-circle"></i> Aspectos generales I<button class="ver">Ver</button>                                                        </a>
                                                    <p>00:24:03</p>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-play-circle"></i> Aspectos generales II <button class="ver">Ver</button>                                                        </a>
                                                    <p>00:37:08</p>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-play-circle"></i> Aspectos generales III <button class="ver">Ver</button>                                                        </a>
                                                    <p>00:29:00</p>
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
                            El Examen se debe resolver de forma total, teniendo en cuenta la fecha de cese de la activación de su cuenta. 
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
                            <li><i class="fas fa-clock"></i> <span>Duración: 220 horas académicas</span></li>
                            <li><i class="fas fa-book"></i> <span>Categoría: Programacion</span></li>
                            <li><i class="fas fa-layer-group"></i> <span>Nivel: Intermedio</span></li>
                            <li><i class="fas fa-clipboard-check"></i> <span>3 módulos</span></li>
                        </ul>
                    </div>
                    <div class="preguntas">
                        <h3>Preguntas frecuentes</h3>
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="head_1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_1" aria-expanded="true" aria-controls="collapse_1">
                                        ¿Dónde encuentro la evaluación y cuántas son?
                                    </button>
                                </h2>
                                <div id="collapse_1" class="accordion-collapse collapse" aria-labelledby="head_1">
                                    <div class="accordion-body">
                                        <p>
                                            La evaluación final estará ubicada en el último módulo de cada programa educativo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="head_2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_2" aria-expanded="true" aria-controls="collapse_2">
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
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_3" aria-expanded="true" aria-controls="collapse_3">
                                        ¿Me dan certificado si desapruebo?
                                    </button>
                                </h2>
                                <div id="collapse_3" class="accordion-collapse collapse" aria-labelledby="head_3">
                                    <div class="accordion-body">
                                        <p>
                                            No, en caso obtenga una nota menor a 16 el sistema le permitirá rendir su examen de nuevo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="head_4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_4" aria-expanded="true" aria-controls="collapse_4">
                                        ¿Hasta cuándo tengo habilitado mi aula virtual?
                                    </button>
                                </h2>
                                <div id="collapse_4" class="accordion-collapse collapse" aria-labelledby="head_4">
                                    <div class="accordion-body">
                                        <p>
                                            Su aula virtual estará disponible durante un año desde la fecha en que recibe su acceso.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="head_5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_5" aria-expanded="true" aria-controls="collapse_5">
                                        ¿Puedo descargar los vídeos?
                                    </button>
                                </h2>
                                <div id="collapse_5" class="accordion-collapse collapse" aria-labelledby="head_5">
                                    <div class="accordion-body">
                                        <p>
                                            No, los vídeos de todas las clases no tienen habilitado la opción de descarga, por ser autoría de la Escuela y de nuestros docentes.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="head_6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_6" aria-expanded="true" aria-controls="collapse_6">
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
    </div>
</section>
@endsection



 
