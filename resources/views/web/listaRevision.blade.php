@extends('layouts.web')
@section('content')
    <div class="container">
        <div class="card card-tarea mb-4 m-2 shadow-sm mt-4">
            <div class="card-title p-0 mb-4">
              <div class="tit mb-2">
                <h4 class="mb-3 px-2">TAREA 01</h4>
              </div>
              <div class="tit2">
                <p style="font-family: font-semibold">Descripcion de la tarea ......</p>
                <a href="/" class="recurso" target="_blank"><img class="img-fluid" src="{{ asset('img/img_tarea.svg') }}" width="20" alt="">&nbsp;Archivo_tarea_modulo_1.pdf</a>
              </div>
            </div>
            <h4 class="p-3">Sumario de Calificaciones:</h4>

            <div class="card-body text-center">
              <table class="table table-borderless tabla table-hover roudnends">
                <tbody>
                  <tr>
                    <th><p>Participantes</p></th>
                    <th><p>30</p></th>
                  </tr>
                  <tr>
                    <th><p>Entregados</p></th>
                    <th><p>2</p></th>
                  </tr>
                  <tr>
                    <th><p>Pentiendes por Calificar</p></th>
                    <th><p>2</p></th>
                  </tr>
                  <tr>
                    <th><p>Fecha de la entrega</p></th>
                    <th><p>martes, 26 de julio del 2022</p></th>
                  </tr>
                </tbody>
              </table>
              <a href="/revisionTareas" class="btn btn-card mb-2">Calificar&nbsp;<i class="fa-solid fa-floppy-disk"></i></a>
          </div>

        </div>
    </div>
@endsection
