<div id="accordion">
    <div class="form-group row ">
        <div class="input-group rounded col-md-9 mt-2">
            <label for="" class="col-form-label mr-2">Crear Nueva Publicacion:</label>
            <button type="button" class="btn btn-info" title="Crear Nuea publicacion" wire:click.prevent="addNew">
                <i class="fas fa-plus-circle mr-1"></i>Nuevo</button>
        </div>
        @include('livewire.admin.publicaciones.create')
    </div>

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
                            <a data-toggle="collapse" href="#collapse{{ $publicacion->id }}"
                                class="btn btn-success btn-sm mr-1">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a class="btn btn-primary btn-sm mr-1" title="Gestion de modulos" wire:click="modulos({{ $publicacion->id }})">
                                <i class="fas fa-info-circle"></i>
                            </a>
                            <a class="btn btn-info btn-sm" wire:click="matricula({{ $publicacion->id }})">
                                <i class="fas fa-clipboard-list"></i>
                            </a>
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
                                    <th scope="col" style="vertical-align:middle; text-align: center;">Acciones</th>
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
                                        <img src="{{ asset($publicacion->rutaimg) }}" alt="Imagen de la publicacion" class="img-thumbnail">
                                    </td>

                                    <td style="vertical-align: middle; text-align: center;">
                                       {{ $publicacion->matriculados->count()}}
                                   </td>
                                   <td style="vertical-align: middle; text-align: center;">
                                        <div class="d-flex justify-content-center">
                                            <button type="button" class="btn btn-info btn-sm mr-1"
                                                wire:click.prevent="edit ({{$publicacion->id}})">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm"
                                                onclick="Confirm('{{$publicacion->id}}')"> 
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </div>
                                   </td> 
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="col-12 d-flex justify-content-start">
            {{ $publicaciones->links() }}
        </div>
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
<script>
    function Notificacion() {
        Livewire.on('notify', function(datos) {
            $(document).Toasts('create', {
                class: datos.modo,
                title: 'Mensaje de Sistema',
                body: datos.mensaje,
                autohide: true,
                delay: 2000
            })
        });

    }
    window.onload = function() {
        Notificacion();
    }
</script>
