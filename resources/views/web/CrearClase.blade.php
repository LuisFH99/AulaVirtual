@extends('layouts.web')
@section('content')
    <div class="container">
        <div class="card card-tarea mb-4 m-5 shadow-sm mt-4">
            <div class="card-title p-0 mb-4">
              <div class="tit mb-2">
                <h4 class="mb-3 px-2">INSERTAR LINK - MODULO 1</h4>
              </div>
              <div class="tit2 mt-4">
                <p style="font-family: font-semibold" style="text-align: justify"><i class="fa-solid fa-angle-right"></i>&nbsp;Estimado docente, en este apartado podra subir el link para las respectivas clases del modulo.</p>
              </div>
            </div>
            <div class="d-flex justify-content-center ">
                <form action="" class="form-tarea">
                    <label for="ruta" class="archivo">
                        <div class="float-start">
                        <i class="fa-solid fa-paperclip fa-1x" style="color: black"></i>&nbsp;Direccion de la url:
                        </div><br><br> 
                        <div class="form-floating">
                            <textarea class="form-control" cols="50" placeholder="pegar enlace" id="floatingTextarea" style="height: 40vh"></textarea>
                            <br><label for="floatingTextarea">Pegar Enlace:</label>
                        </div><br><br>
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
