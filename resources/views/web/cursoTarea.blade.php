@extends('layouts.web')
@section('content')
    <div class="container">
        {{-- <div class="card card-tarea show-sm mx-2 my-4">
          <h4>Programacion orientada a Objetos</h4>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Library</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
          </nav>
          <a href="/" class="btn btn-primary">Regresar</a>
        </div> --}}
        <div class="card card-tarea mb-4 m-2 shadow-sm mt-4">
            <div class="card-title p-0 mb-4">
              <div class="tit mb-2">
                <h4 class="mb-3 px-2">TAREA DEL MODULO 1</h4>
              </div>
              <div class="tit2">
                <p style="font-family: font-semibold">Estimado estudiante se requiere la entrega de la tarea, referencia al tema ......</p>
                <a href="/" class="recurso" target="_blank"><img class="img-fluid" src="{{ asset('img/img_tarea.svg') }}" width="20" alt="">&nbsp;Archivo_tarea_modulo_1.pdf</a>
              </div>
            </div>
            <h4 class="p-3">Estado de la entrega:</h4>

            <div class="card-body text-center">
              {{-- <div class="row detalle">
                <div class="entrega-detalle">
                  <p>Estado de Entrega</p>
                  <p>Trabajo Entregado</p>
                </div>
                <div class="entrega-detalle">
                  <p>Estado de Calificacion</p>
                  <p>Sin Calificar</p>
                </div>
                <div class="entrega-detalle">
                  <p>Fecha de la Entrega</p>
                  <p>martes, 26 de julio del 2022</p>
                </div>
                <div class="entrega-detalle">
                  <p>Ultima Modificacion</p>
                  <p>-</p>
                </div>
                <div class="entrega-detalle">
                  <p>Nombre del archivo</p>
                  <p>No se encontraron archivos</p>
                </div>
              </div> --}}
              <table class="table table-borderless tabla table-hover roudnends">
                <tbody>
                  <tr>
                    <th><p>Estado de la entrega</p></th>
                    <th><p>Trabajo Entregado</p></th>
                  </tr>
                  <tr>
                    <th><p>Estado de calificacion</p></th>
                    <th><p>Sin Calificar</p></th>
                  </tr>
                  <tr>
                    <th><p>Fecha de la entrega</p></th>
                    <th><p>martes, 26 de julio del 2022</p></th>
                  </tr>
                  <tr>
                    <th><p>Ultima modificacion</p></th>
                    <th><p>-</p></th>
                  </tr>
                  <tr>
                    <th><p>Archivos enviados</p></th>
                    <th><p>tarea_01_modulo_01.pdf</p></th>
                  </tr>
                </tbody>
              </table>
              <a href="/entrega" class="btn btn-card mb-2">Entregar&nbsp;<i class="fa-solid fa-floppy-disk"></i></a>
              <p>
                <small>Todavia no has realizado una entrega</small>
              </p>
          </div>

        </div>
    </div>
@endsection

{{-- 
bd local:
Server Host:localhost 
Port:3306
Username=root    
--}}