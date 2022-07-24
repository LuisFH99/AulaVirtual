@extends('layouts.web')
@section('content')
<section class="sec3 mt-0" id="miscursos">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 sliderHome px-0">
                <div id="carousel-slider" class="owl-carousel">
                    <div class="item">
                        <div class="slider" style="background-image: url('https://images.pexels.com/photos/8199166/pexels-photo-8199166.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')">
                            <h1>Floro en construccion</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 px-0">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills3tab" data-bs-toggle="pill" data-bs-target="#pills3" type="button" role="tab" aria-controls="pills3" aria-selected="false">
                            <span>Mis cursos</span>
                        </button>
                    </li>
                </ul>
            </div>
            <div class="col-md-10">
                <div class="tab-content" id="pills-tabContent">
                    {{-- <div class="tab-pane fade" id="pills1" role="tabpanel" aria-labelledby="pills1tab">
                        <!-- mis cursos -->
                    </div>
                    <div class="tab-pane fade" id="pills2" role="tabpanel" aria-labelledby="pills2tab">
                        <!-- sugeridos -->          
                    </div> --}}
                    <div class="tab-pane fade show active" id="pills3" role="tabpanel" aria-labelledby="pills3tab">
                        <div class="row">
                            <div class="miscursos_left col-md-3">
                                <div class="card_item">
                                    <p class="tit fw-bold" style="background: #007AF3">Categorías</p>
                                    <div class="list">
                                        <a href="https://aula.enppeduca.com/cursos/c/contabilidad">Contabilidad</a>
                                        <a href="https://aula.enppeduca.com/cursos/c/derecho">Derecho</a>
                                        <a href="https://aula.enppeduca.com/cursos/c/desarrollo-profesional">Desarrollo profesional</a>
                                        <a href="https://aula.enppeduca.com/cursos/c/gestion-publica">Gestión pública</a>
                                        <a href="https://aula.enppeduca.com/cursos/c/ingles">Inglés</a>
                                        <a href="https://aula.enppeduca.com/cursos/c/seguridad-y-salud-ocupacional">Seguridad y Salud Ocupacional</a>
                                        <a href="https://aula.enppeduca.com/cursos/c/tributacion">Tributación</a>
                                    </div>
                                </div>
                            </div>
                            <div class="cursos_ col-md-9">
                                <livewire:cursos/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

{{-- 
https://aula.enppeduca.com/

_USUARIO:   yanethmarizol@gmail.com 
_CONTRASEÑA:     47792355    
--}}