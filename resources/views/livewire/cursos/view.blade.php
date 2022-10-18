<div class="col-md-10">
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills3" role="tabpanel" aria-labelledby="pills3tab">
            <div class="row">
                <div class="miscursos_left col-md-3">
                    <div class="card_item">
                        <p class="tit fw-bold" style="background: #007AF3" wire:click.prevent="SeleccionarCategoria('0')">Categorías - Todas</p>
                        <div class="liscategory">
                            <ul >
                                @foreach ($categorias as $categoria)
                                    <li >
                                        <a href="#"
                                            wire:click.prevent="SeleccionarCategoria('{{ $categoria->nombre }}')">{{ $categoria->nombre }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="cursos_ col-md-9">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <h2 class="todos_tit">
                                {{ $aux == 0 ? 'Todos tus Cursos' : 'Tus Cursos de la Categoria: ' . $aux }} </h2>
                        </div>
                        @foreach ($allmatriculauser as $matriculauser)
                            @if ($aux == 0)
                                <div class="col-6 col-md-4 mi_curso_">
                                    <div class="mi_curso__">
                                        <div class="imagen">
                                            <a href="/">
                                                <img src="{{  asset($matriculauser->publicacion->rutaimg) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="contentido sombrita">
                                            <h2 class="text-center text-uppercase"><a href="/"
                                                    class="text-decoration-none card-text ">{{ $matriculauser->publicacion->curso->nombre }}</a>
                                            </h2>
                                            <div class="estudiantes">
                                                <img src="https://aula.enppeduca.com/images/icon-estudiantes.png"
                                                    alt="">
                                                <p>{{ count($matriculauser->publicacion->matriculados) }} Estudiantes
                                                </p>
                                                {{-- <i class="fa-solid fa-user-group" style="color: #1C3D5E"></i>&nbsp;&nbsp;&nbsp; --}}
                                            </div>
                                            <div class="certificciones">
                                                <img src="https://aula.enppeduca.com/images/icon-certificacion.png"
                                                    alt="">
                                                <p>Certificación <span> {{ $matriculauser->publicacion->horas }} horas
                                                        académicas</span></p>
                                            </div>
                                            <div class="boton"><a
                                                    href="{{ route('detallecurso.index', $matriculauser->publicacion->id) }}"
                                                    class="btn btn-card">Ver Curso</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @elseif ($matriculauser->publicacion->curso->categoria->nombre == $aux)
                                <div class="col-6 col-md-4 mi_curso_">
                                    <div class="mi_curso__">
                                        <div class="imagen">
                                            <a href="/">
                                                <img src="{{  asset($matriculauser->publicacion->rutaimg) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="contentido sombrita">
                                            <h2 class="text-center text-uppercase"><a href="/"
                                                    class="text-decoration-none card-text ">{{ $matriculauser->publicacion->curso->nombre }}</a>
                                            </h2>
                                            <div class="estudiantes">
                                                <img src="https://aula.enppeduca.com/images/icon-estudiantes.png"
                                                    alt="">
                                                <p>{{ count($matriculauser->publicacion->matriculados) }} Estudiantes
                                                </p>
                                                {{-- <i class="fa-solid fa-user-group" style="color: #1C3D5E"></i>&nbsp;&nbsp;&nbsp; --}}
                                            </div>
                                            <div class="certificciones">
                                                <img src="https://aula.enppeduca.com/images/icon-certificacion.png"
                                                    alt="">
                                                <p>Certificación <span> {{ $matriculauser->publicacion->horas }} horas
                                                        académicas</span></p>
                                            </div>
                                            <div class="boton"><a
                                                    href="{{ route('detallecurso.index', $matriculauser->publicacion->id) }}"
                                                    class="btn btn-card">Ver Curso</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
