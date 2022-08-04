@extends('layouts.web')
@section('content')
    <div class="container">
        <div class="card card-tarea mb-4 m-5 shadow-sm mt-4">
            <div class="card-title p-0 mb-4">
              <div class="tit mb-2">
                <h4 class="mb-3 px-2">RECURSOS DEL TEMA ....</h4>
              </div>
              <div class="tit2 mt-4">
                <p style="font-family: font-semibold" style="text-align: justify"><i class="fa-solid fa-angle-right"></i>&nbsp;Estimado docente, en este apartado podra subir los materiales de los diferentes temas, para sus estudiantes.</p>
              </div>
            </div>
            <div class="d-flex justify-content-center ">
                <form action="" class="form-tarea">
                    <label for="descripcion">
                        <span>Descripcion:</span>
                        <input class="form-input" type="text" name="descripcion" id="descripcion" required>
                    </label><br>
                    <label for="ruta" class="archivo">
                        <div class="float-start">
                        <i class="fa-solid fa-folder fa-1x"></i> Archivo del material
                        </div><br> 
                        <div class="drop-zone mt-2">
                                <i class="icon fa-solid fa-cloud-arrow-up"></i>
                                <span class="drop-zone__prompt">Suelte el archivo aquí o haga clic para cargar</span>
                                <input type="file" name="myFile" class="drop-zone__input">
                        </div><br>
                        <div class="text-start">
                            <button type="submit" class="btn btn-primario"><i class="fa-solid fa-paper-plane fa-1x"></i>&nbsp;Guardar Cambios</button>
                            <button type="submit" class="btn btn-cancel"><i class="fa-solid fa-ban fa-1x"></i>&nbsp;Cancelar</button>
                        </div>
                    </label><br>
                </form>
            </div>
        </div>
    </div>
@endsection
