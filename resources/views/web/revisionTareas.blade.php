@extends('layouts.web')
@section('content')
<div class="container">
    <div class="card card-tarea mb-4 m-3 shadow-sm mt-4">
        <div class="card-title p-0 mb-4">
          <div class="tit mb-2">
            <h4 class="mb-3 px-2">REVISION DE LA TAREA 1</h4>
          </div>
          <div class="tit2 mt-4">
            <p style="font-family: font-semibold"><i class="fa-solid fa-angle-right"></i>&nbsp;Estimado docente, en este apartado podra revisar las tareas enviadas de sus estudiantes.</p>
          </div>
        </div>
        <div class="d-flex table-responsive mb-4">
            <table class="table table-responsive table-borderless caption-top tab-tareas table-hover">
                <caption>Listado de estudiantes matriculados <i class="fa-solid fa-users fa-1x"></i></caption>
                <thead>
                  <tr>
                    <th scope="col" class="text-center" >Usuario</th>
                    <th scope="col">Nombres/Apellidos</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Calificacion</th>
                    <th scope="col">Editar</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center"><img src="{{ asset('img/user.svg') }}" width="50" alt="imagen de usuario"></td>
                    <td>Mark Mark Otto Alva</td>
                    <td><span class="badge rounded-pill bg-secondary">Sin Entregar</span></td>
                    <td>
                        <button type="button" class="btn btn-primario" title="Calificar Tarea" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Calificacion
                        </button>
                    </td>
                    <td><button class="btn btn-cancel" title="Editar Calificacion" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square fa-1x" style="cursor: pointer;"></i></button></td>
                  </tr>
                  <tr>
                    <td class="text-center"><img src="{{ asset('img/user.svg') }}" width="50" alt="imagen de usuario"></td>
                    <td>Mark Mark Otto Alva</td>
                    <td><span class="badge rounded-pill bg-secondary">Sin Entregar</span></td>
                    <td>
                        <button type="button" class="btn btn-primario" title="Calificar Tarea" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Calificacion
                        </button>
                    </td>
                    <td><button class="btn btn-cancel" title="Editar Calificacion" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square fa-1x" style="cursor: pointer;"></i></button></td>
                  </tr>
                  <tr>
                    <td class="text-center"><img src="{{ asset('img/user.svg') }}" width="50" alt="imagen de usuario"></td>
                    <td>Mark Mark Otto Alva</td>
                    <td><span class="badge rounded-pill bg-danger">Entregado</span></td>
                    <td>
                        <button type="button" class="btn btn-primario" title="Calificar Tarea" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Calificacion
                        </button>
                    </td>
                    <td><button class="btn btn-cancel" title="Editar Calificacion" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square fa-1x" style="cursor: pointer;"></i></button></td>
                  </tr>
                  <tr>
                    <td class="text-center"><img src="{{ asset('img/user.svg') }}" width="50" alt="imagen de usuario"></td>
                    <td>Mark Mark Otto Alva</td>
                    <td><span class="badge rounded-pill bg-secondary">Sin Entregar</span></td>
                    <td>
                        <button type="button" class="btn btn-primario" title="Calificar Tarea" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Calificacion
                        </button>
                    </td>
                    <td><button class="btn btn-cancel" title="Editar Calificacion" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square fa-1x" style="cursor: pointer;"></i></button></td>
                  </tr>
                  <tr>
                    <td class="text-center"><img src="{{ asset('img/user.svg') }}" width="50" alt="imagen de usuario"></td>
                    <td>Mark Mark Otto Alva</td>
                    <td><span class="badge rounded-pill bg-success">Calificado</span></td>
                    <td>
                        <button type="button" class="btn btn-primario" title="Calificar Tarea" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Calificacion
                        </button>
                    </td>
                    <td><button class="btn btn-cancel" title="Editar Calificacion" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square fa-1x" style="cursor: pointer;"></i></button></td>
                  </tr>
                </tbody>
              </table>
        </div>
        <p>Aqui la paginacion xd</p>
    </div>

</div>

<!-- Modal -->  
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-white cabecera-modal">
          <h5 class="modal-title" id="exampleModalLabel">Revision Tarea</h5>
          <button type="button" class="btn-close btn-close-white " data-bs-dismiss="modal" aria-label="Close"></button>
        </div>          
        
        <form action="">
          <div class="modal-body">
              <div class="tit2">
                  <label>Tarea enviada por:&nbsp;<b>Mark Mark Otto Alva</b></label><br><br>
                  <a href="/" class="recurso my-3" target="_blank"><img class="img-fluid" src="{{ asset('img/img_tarea.svg') }}" width="20" alt="">&nbsp;Archivo_tarea_modulo_1.pdf</a><br>
                  <div class="my-3 row ">
                    <label for="nota" class="col-sm-8 col-form-label">Calificacion sobre los 20 puntos:</label>
                    <div class="col-sm-4">
                      <input type="number"  class="form-control" id="nota" required min="0" >
                    </div>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-cancel" data-bs-dismiss="modal"><i class="fa-solid fa-xmark fa-1x"></i> Cerrar</button>
            <button type="submit" class="btn btn-primario"><i class="fa-solid fa-floppy-disk fa-1x"></i> Guardar</button>
          </div>
      </form>
      </div>
    </div>
  </div>
@endsection