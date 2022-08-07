@extends('layouts.web')
@section('content')
<div class="container">
    <div class="card card-tarea mb-4 m-2 shadow-sm mt-4">
        <div class="card-title p-0 mb-4">
          <div class="tit mb-2 py-2">
            <h4 class="mb-3 px-2">TRABAJO DEL MODULO N°1</h4>
            <small class="px-2" ><b>Apertura:</b> Lunes, miercoles 26 de julio del 2022</small><br>
            <small class="px-2" ><b>Cierre:</b> Lunes, miercoles 26 de julio del 2022</small>
          </div>
          <div class="tit2 mt-4">
            <a href="/" class="recurso" target="_blank"><img class="img-fluid" src="{{ asset('img/img_tarea.svg') }}" width="20" alt="">&nbsp;Archivo_tarea_modulo_1.pdf</a>&nbsp; <small>Lunes, miercoles 26 de julio del 2022, 14:02</small>
          </div>
        </div>
        <h4 class="px-3">Archivos enviados</h4>
            <ul class="lista-val" style="font-family: font-semibold">
                <li><i class="fa-solid fa-angle-right" style="color: gray" ></i>&nbsp;Tamaño maximo de archivo: 25 MB</li>
                <li><i class="fa-solid fa-angle-right" style="color: gray" ></i>&nbsp;Numero maximo de archivo: 20</li>
            </ul>
        <div class="card-body text-center">
            <div class="d-flex justify-content-center">
                <form>
                    <div class="float-start">
                        <i class="fa-solid fa-folder fa-1x"></i> Archivos 
                    </div><br> 
                    <div class="card p-2">
                        <div class="drop-zone mt-2">
                            <i class="icon fa-solid fa-cloud-arrow-up"></i>
                            <span class="drop-zone__prompt">Suelte el archivo aquí o haga clic para cargar</span>
                            <input type="file" name="myFile" class="drop-zone__input">
                        </div>
                    </div><br>
                    <div class="text-start">
                        <button type="submit" class="btn btn-primario">
                            <i class="fa-solid fa-paper-plane fa-1x"></i>&nbsp;Guardar Cambios
                        </button>
                        <button type="submit" class="btn btn-cancel"><i class="fa-solid fa-ban fa-1x"></i>&nbsp;Cancelar</button>
                    </div>

                </form>

                {{-- <a href="/entrega" class="btn btn-card mb-2">Guardar&nbsp;<i class="fa-solid fa-floppy-disk"></i></a> --}}
            </div>
        </div>

    </div>
</div>
@endsection
