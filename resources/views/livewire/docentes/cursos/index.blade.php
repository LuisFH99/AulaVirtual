@extends('layouts.web')
@section('content')
    <section class="sec3 mt-0" id="miscursos">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12 sliderHome px-0">
                    <div id="carousel-slider" class="owl-carousel">
                        <div class="item">
                            <div class="slider"
                                style="background-image: url('https://images.pexels.com/photos/8199166/pexels-photo-8199166.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')">
                                <h1>Floro en construccion</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 px-0">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills3tab" data-bs-toggle="pill" data-bs-target="#pills3"
                                type="button" role="tab" aria-controls="pills3" aria-selected="false">
                                <span>Mis cursos</span>
                            </button>
                        </li>
                    </ul>
                </div>
                <livewire:docentes.curso-controller />
            </div>
        </div>
    </section>
@endsection
