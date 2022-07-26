@extends('layouts.web')
@section('content')
<section class="sec5 mt-4" id="sesion">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 sesion_left">
                <div class='embed-container'>
                    <div style="align-content: center">
                        <iframe  id="iframe_vimeo" src="https://player.vimeo.com/video/656301294?h=c813b472ea&autoplay=1&title=0&byline=0&portrait=0"
                            style="position:absolute;top:0;left:0;width:100%;height:100%;"
                            frameborder="0"
                            allow="autoplay; fullscreen; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6 session_details mt-0 mb-3">
                        <div class="col-md-12 mb-2">
                            <span class="tit"><p>CONTABILIDAD GENERAL</p></span>
                            <h5 class="font-bold">Curso: <a href="/cursos">Aspectos generales tributarios aplicables a las empresas</a></h5>
                            <hr style="height: 0.5px;">
                            <div class="detail">
                                <div class="docente">
                                    <i class="fa-solid fa-clipboard fa-2x" style="color: #2d529f"></i>&nbsp;&nbsp;<span>Tema:</span>
                                </div>
                            </div>
                            <div class="detail">
                                <div class="docente">
                                    <img src="https://aula.enppeduca.com/images/profiles/1647913293.jpeg" alt="">
                                    <span>Nombre Docente</span>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="col-md-6 sesion_right">
                        <div class="content">
                            <ul class="nav nav-pills mb-3" id="pills-tab comments" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills_2" data-bs-toggle="pill" data-bs-target="#pillstab_2" type="button" role="tab" aria-controls="pillstab_2" aria-selected="true">
                                        <span>Material de Apoyo:</span>
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pillstab_2" role="tabpanel" aria-labelledby="pills_2">
                                    <div class="downloads"><a href="/" target="_blank" class="downloads__link">
                                        <i class="fas fa-download"></i>Archivo 1<span>modulo-i-1647637753.pdf</span></a>
                                    </div>
                                    <div class="downloads"><a href="/" target="_blank" class="downloads__link">
                                        <i class="fas fa-download"></i>Archivo 2<span>image-modulo-1.pdf</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="botones mt-1">
                            <div class="regresar">
                                <a href="/cursos" class="btn btn-regresar"><i class="fa fa-reply"></i> Listado de Temas</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
@endsection
