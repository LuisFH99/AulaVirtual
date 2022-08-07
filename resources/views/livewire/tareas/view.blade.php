<div class="card card-tarea mb-4 m-2 shadow-sm mt-4">
    <div class="card-title p-0 mb-4">
        <div class="tit mb-2">
            <h4 class="mb-3 px-2">TAREA DEL {{ strtoupper($tarea->modulo->nombre) }}</h4>
        </div>
        <div class="tit2">
            <p>{{ ucfirst($tarea->descripcion) }}</p>
            @if (!is_null($tarea->ruta))
                <a href="/" class="recurso" target="_blank"><img class="img-fluid"
                        src="{{ asset('img/img_tarea.svg') }}" width="20"
                        alt="">&nbsp;Archivo_tarea_modulo_1.pdf</a>
            @endif

        </div>
    </div>
    <h4 class="p-3">Estado de la entrega:</h4>

    <div class="card-body text-center">

        <table class="table table-borderless tabla table-hover roudnends">
            <tbody>
                <tr>
                    <th>
                        <p>Estado de la entrega</p>
                    </th>
                    <th>
                        <p>{{ is_null($entregable) ? 'Trabajo sin Entregar' : 'Trabajo Encargado' }}</p>
                        {{-- <p>Trabajo Entregado</p> --}}
                    </th>
                </tr>
                <tr>
                    <th>
                        <p>Estado de calificacion</p>
                    </th>
                    <th>
                        <p>{{ (is_null($entregable) ? 'Sin Calificar' : is_null($entregable->nota)) ? 'Sin Calificar' : $entregable->nota }}
                        </p>
                        {{-- <p>Sin Calificar</p> --}}
                    </th>
                </tr>
                <tr>
                    <th>
                        <p>Fecha de la entrega</p>
                    </th>
                    <th>
                        <p>{{ date(' l, d  F  Y', strtotime($tarea->fecha_entrega)) }}</p>
                        {{-- <p>{{ date("Y-m-d", strtotime('monday this week', strtotime($tarea->fecha_entrega)))}}</p> --}}
                        {{-- <p>martes, 26 de julio del 2022</p> --}}
                    </th>
                </tr>
                <tr>
                    <th>
                        <p>Archivos enviados</p>
                    </th>
                    <th>
                        <p>{{ (is_null($entregable) ? 'Sin enviar' : is_null($entregable->ruta)) ? 'Sin enviar' : $entregable->ruta }}
                            {{-- <p>tarea_01_modulo_01.pdf</p> --}}
                    </th>
                </tr>
            </tbody>
        </table>
        @if (is_null($entregable) && $tarea->fecha_entrega <= now())
            <a href="{{ route('entregable.index', ['idtarea' => $tarea->id, 'idmatricula' => $matricula->id]) }}"
                class="btn btn-card mb-2">Entregar&nbsp;<i class="fa-solid fa-floppy-disk"></i></a>
            <p>
                <small>Todavia no has realizado una entrega</small>
            </p>
        @endif


    </div>

</div>
