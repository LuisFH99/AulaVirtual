<div class="card card-tarea m-3 shadow-sm mt-4">
    <div class="card-title p-0">
        <div class="tit mb-2">
            <h4 class="mb-3 px-2">Libro de Calificación del curso: {{ $curso }}</h4>
        </div>
        <div class="tit2 ">
            <p style="font-family: font-semibold">Estimado docente, en
                este apartado observara la lista de calificaciones de los examenes del curso: {{ $curso }}</p>
        </div>
    </div>
    <div class="d-flex table-responsive mb-4">
        <table class="table table-responsive table-borderless caption-top tab-tareas table-hover text-center">
            <caption>Listado de estudiantes <i class="fa-solid fa-users fa-1x"></i></caption>
            <thead>
                <tr>
                    <th scope="col" class="text-center">N°</th>
                    <th scope="col">Apellidos y Nombres</th>
                    <th scope="col">Primera Evaluación</th>
                    <th scope="col">Segunda Evaluación</th>
                    <th scope="col">Promedio</th>
                    <th scope="col">Condición</th>
                </tr>
            </thead>
            <tbody>      
                @foreach ($resultados as $key => $resultado)
                    <tr>
                        <td class="text-center">{{ $key + 1 }}</td>
                        <td>{{ $resultado['nombres'] }}</td>
                        @foreach ($resultado['examen'] as $nota)
                            <td>{{ is_null($nota) ? '-' : substr('0' . $nota, -2) }}</td>
                        @endforeach
                        <td>
                            <span class="badge rounded-pill {{ $resultado['condicion'] == 'Desaprobado' ? 'bg-danger' : 'bg-success' }}">{{ $resultado['condicion'] }}</span>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

</div>
