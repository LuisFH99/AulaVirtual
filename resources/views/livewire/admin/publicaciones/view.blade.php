<div id="accordion">
    {{-- <div class="form-group row ">
       <div class="input-group rounded col-md-9 mt-2">
           <label for="" class="col-md-3 col-form-label">Buscar
               Entidad:</label>
           <input type="search" wire:model="buscar"
               class="form-control rounded d-flex" placeholder="Buscar"
               aria-label="Search" aria-describedby="search-addon" />
           <div class="input-group-append">
               <span class="input-group-text border-0" id="search-addon">
                   <i class="fas fa-search"></i>
           </div>
           </span>
       </div>
   </div> --}}
    @if (count($publicaciones) > 0)
        @foreach ($publicaciones as $publicacion)
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-9">
                            <h3 class="card-title font-weight-bold text-uppercase mt-1">{{ $publicacion->curso->nombre }}
                            </h3>
                        </div>

                        <div class="col-3 d-flex justify-content-end">
                            {{-- <div class="card-tools "> --}}

                            {{-- <button type="button" class="btn btn-warning btn-sm">
                                   <i class="fas fa-user-plus"></i>
                               </button> --}}

                            <a data-toggle="collapse" href="#collapse{{ $publicacion->id }}"
                                class="btn btn-success btn-sm mr-1">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a class="btn btn-info btn-sm" wire:click="matricula({{ $publicacion->id }})">
                                <i class="fas fa-clipboard-list"></i>
                            </a>
                            {{-- <button type="button" class="btn btn-info btn-sm">
                                   <i class="fas fa-clipboard-list"></i>
                               </button> --}}

                            {{-- <button type="button" class="btn btn-danger btn-sm" >
                                   <i class="fas fa-trash"></i>
                               </button> --}}
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
                <div id="collapse{{ $publicacion->id }}" class="collapse" data-parent="#accordion">

                    <div class="card-body">

                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th scope="col" style="vertical-align:middle; text-align: center;">Matricula</th>
                                    <th scope="col" style="vertical-align:middle; text-align: center;">Duracion Curso
                                    </th>
                                    <th scope="col" style="vertical-align:middle; text-align: center;">Horas</th>
                                    <th scope="col" style="width: 100px; vertical-align:middle; text-align: center;">Nota
                                        Minima</th>
                                    <th scope="col" style="vertical-align:middle; text-align: center;">Nivel</th>
                                    <th scope="col" style="vertical-align:middle; text-align: center;">Tipo</th>
                                    <th scope="col" style="width: 100px; vertical-align:middle; text-align: center;">
                                        Imagen</th>
                                    <th scope="col" style="width: 100px; vertical-align:middle; text-align: center;">
                                        N° Estudiantes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="vertical-align: middle; text-align: center;">
                                        {{ date('d/m/Y', strtotime($publicacion->fecha_inicio_matricula)) }} -
                                        {{ date('d/m/Y', strtotime($publicacion->fecha_fin_matricula)) }}</td>
                                    <td style="vertical-align: middle; text-align: center;">
                                        {{ date('d/m/Y', strtotime($publicacion->fecha_inicio)) }} -
                                        {{ date('d/m/Y', strtotime($publicacion->fecha_fin)) }}</td>
                                    <td style="vertical-align: middle; text-align: center;">
                                        {{ $publicacion->horas }}</td>
                                    <td style="vertical-align: middle; text-align: center;">
                                        {{ $publicacion->nota_minima }}</td>
                                    </td>
                                    <td style="vertical-align: middle; text-align: center;">
                                        {{ $publicacion->nivelpublicacion->nivel }}</td>
                                    </td>
                                    <td style="vertical-align: middle; text-align: center;">
                                        {{ $publicacion->tipopublicacion->tipo }}</td>
                                    </td>
                                    <td style="vertical-align: middle; text-align: center;">
                                        <img src="{{ $publicacion->rutaimg }}" alt="" class="img-thumbnail">
                                    </td>
                                    <td style="vertical-align: middle; text-align: center;">
                                       {{ $publicacion->matriculados->count()}}
                                   </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- <div class="col-12 d-flex justify-content-center">
            {{ $entidades->links() }}
        </div> --}}
    @else
        <div class="d-flex justify-content-center">
            <div class="card col-7">
                <div class="card-header d-flex justify-content-center">
                    <h3 class="card-title font-weight-bold "> NO SE ENCONTRA NINGUN REGISTRO EN EL SISTEMA</h3>
                </div>
            </div>
        </div>
    @endif

</div>
