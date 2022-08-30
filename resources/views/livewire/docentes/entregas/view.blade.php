<div class="card card-tarea m-3 shadow-sm mt-4">
    <div class="card-title p-0">
        <div class="tit mb-2">
            <h4 class="mb-3 px-2">Tarea del Curso: {{ ucwords($tarea->modulo->publicacion->curso->nombre) }} |
                {{ ucwords($tarea->modulo->nombre) }}</h4>
        </div>
        <div class="tit2 ">
            <div class="bd-callout bd-callout-info">
                {{ ucfirst($tarea->descripcion) }}
                @if (!is_null($tarea->ruta_archivo))
                    <a href="{{ asset($entrega->ruta) }}" class="recurso my-3" download> <i class="fas fa-file-alt"
                            style="color: white; padding: 8px; background-color: blue; 
                    border-radius: 25%; font-size: 15px"></i></a>
                @endif
            </div>
            <p style="font-family: font-semibold"><i class="fa-solid fa-angle-right"></i>&nbsp;Estimado docente, en
                este apartado podra revisar las tareas enviadas de sus estudiantes.</p>
        </div>
    </div>
    <div class="d-flex table-responsive mb-4">
        <table class="table table-responsive table-borderless caption-top tab-tareas table-hover">
            <caption>Listado de estudiantes matriculados <i class="fa-solid fa-users fa-1x"></i></caption>
            <thead>
                <tr>
                    <th scope="col" class="text-center">Usuario</th>
                    <th scope="col">Apellidos y Nombres</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Documento</th>
                    <th scope="col">Calificacion</th>
                    <th scope="col">Calificar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($entregas as $entrega)
                    <tr>
                        <td class="text-center"><img src="{{ asset('img/user.svg') }}" width="50"
                                alt="imagen de usuario"></td>
                        <td>{{ ucfirst($entrega->apellidos) }} {{ ucfirst($entrega->nombres) }}</td>
                        <td><span
                                class="badge rounded-pill {{ is_null($entrega->ruta) ? 'bg-secondary' : (is_null($entrega->nota) ? 'bg-danger' : 'bg-success') }}">{{ is_null($entrega->ruta) ? 'Sin Entregar' : (is_null($entrega->nota) ? 'Entregado' : 'Calificado') }}</span>
                        </td>
                        <td>
                            @if (!is_null($entrega->ruta))
                                <a href="{{ asset($entrega->ruta) }}" class="recurso my-3" download> <i
                                        class="fas fa-file-alt"
                                        style="color: white; padding: 8px; background-color: blue; 
                                        border-radius: 25%; font-size: 15px"></i></a>
                            @else
                                -
                            @endif
                        </td>
                        <td>
                            {{ is_null($entrega->nota) ? '-' : $entrega->nota }}

                        </td>
                        <td><button class="btn btn-primario" title="Calificar"
                                wire:click="showModal('{{ $entrega->apellidos }} {{ $entrega->nombres }}',{{ is_null($entrega->ruta) ? 0 : $entrega->id }})"><i
                                    class="fa-solid fa-pen-to-square fa-1x" style="cursor: pointer;"></i></button></td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
    {{-- <div id="paginacion" >
        {{ $entregas->links() }}
    </div> --}}
    @include('livewire.docentes.entregas.modal-calificar')
</div>
<script>
    window.onload = function() {
        miNotificacion();
    }
</script>
