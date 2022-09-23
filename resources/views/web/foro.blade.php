@extends('layouts.web')
@section('content')
    <div class="container">
        <div class="card card-tarea mb-4 m-5 shadow-sm mt-4">
          {{-- Cabecera Foro--}}
            <div class="card-title p-0 mb-0 ">
              <div class="tit mb-2">
                <h5 class="mb-3 px-2 fw-bold">Foro Consulta: Tema sobre versiones del word</h5>
              </div>
              <div class="tit2 mt-4 text-white pt-3 " style="background-color: #2d529f;">
                <p style="font-family: font-semibold">&nbsp;La fecha límite para publicar en este foro es miércoles, 20 de septiembre de 2022, 08:30.</p>
              </div>
            </div>
            {{-- Descripcion Foro --}}
            <div class="d-flex" style="border: 1px solid #2d529f">
              <div class="align-self-start m-2 ml-0">
                <small class="fw-bold p-2">Foro consulta: Temas del primer día</small><br>
                <small class="p-2">viernes, 26 de agosto de 2022, 13:37</small><br><br>
                <p class="p-3 m-0 mb-5" style="text-align: justify; background-color: #e1efe9;border: 1px solid salmon; border-radius: 5px;">
                  Aca va la descripcion del foro....lleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. 
                  No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, 
                  el cual incluye versiones de Lorem Ipsum.
                </p>

                <div class="my-3">
                  <a class="btn btn-primary btn-sm" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fas fa-pencil-alt"></i>&nbsp;Responder
                  </a>
                </div>
                <div class="collapse my-2" id="collapseExample">
                  <form action="">
                    <div class="card card-body">
                      <textarea class="text-dark form-control mb-0" name="" id="" cols="30" rows="8" placeholder="Escriba su respuesta..."></textarea><br>
                      <div class="mt-0">
                        <button class="btn btn-primario text-end" type="submit"><small><i class="fas fa-paper-plane fa-1x"></i>&nbsp;Enviar</small></button>
                        <button class="btn btn-cancel" type="reset" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-ban fa-1x"></i>&nbsp;Cancelar</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div><br>
            {{-- Respuestas --}}
            <div style="border: 1px solid #2d529f" class="mb-2">
              <div class=" m-2 ml-0">
                <div class="row">
                  <div class="col-md-1">
                    <img class="m-0 p-0 img-fluid" src="{{ asset('img/tutor.png') }}" width="60" alt="foto usuario">
                  </div>
                  <div class="d-flex flex-column col-md-11 m-0 p-0 mt-2">
                    <small class="fw-bold px-2">Re: Foro consulta: Temas del primer día</small>
                    <small class=" px-2">de <b style="color: #2d529f">LUIS FACTOR HUERTA</b> - viernes, 26 de agosto de 2022, 13:37</small>
                  </div>
                </div><br>
                  <p class="p-2" style="text-align: justify">Respuesta de uno de los usuario del foro Respuesta de uno de los usuario del foroRespuesta de uno de los usuario del foroRespuesta de uno de los usuario del foroRespuesta de uno de los usuario del foro</p>
                  <div class="my-3">
                    <a class="btn btn-primary btn-sm" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                      <i class="fas fa-pencil-alt"></i>&nbsp;Responder
                    </a>
                  </div>
                  <div class="collapse my-2" id="collapseExample2">
                    <form action="">
                      <div class="card card-body">
                        <textarea class="text-dark form-control mb-0" name="" id="" cols="30" rows="8" placeholder="Escriba su respuesta..."></textarea><br>
                        <div class="mt-0">
                          <button class="btn btn-primario text-end" type="submit"><small><i class="fas fa-paper-plane fa-1x"></i>&nbsp;Enviar</small></button>
                          <button class="btn btn-cancel" type="reset" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-ban fa-1x"></i>&nbsp;Cancelar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
            <div style="border: 1px solid #2d529f" class="mb-2">
              <div class=" m-2 ml-0">
                <div class="row">
                  <div class="col-md-1">
                    <img class="m-0 p-0 img-fluid" src="{{ asset('img/tutor.png') }}" width="60" alt="foto usuario">
                  </div>
                  <div class="d-flex flex-column col-md-11 m-0 p-0 mt-2">
                    <small class="fw-bold px-2">Re: Foro consulta: Temas del primer día</small>
                    <small class=" px-2">de <b style="color: #2d529f">LUIS FACTOR HUERTA</b> - viernes, 26 de agosto de 2022, 13:37</small>
                  </div>
                </div><br>
                  <p class="p-2" style="text-align: justify">Respuesta de uno de los usuario del foro Respuesta de uno de los usuario del foroRespuesta de uno de los usuario del foroRespuesta de uno de los usuario del foroRespuesta de uno de los usuario del foro</p>
                  <div class="my-3">
                    <a class="btn btn-primary btn-sm" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
                      <i class="fas fa-pencil-alt"></i>&nbsp;Responder
                    </a>
                  </div>
                  <div class="collapse my-2" id="collapseExample1">
                    <form action="">
                      <div class="card card-body">
                        <textarea class="text-dark form-control mb-0" name="" id="" cols="30" rows="8" placeholder="Escriba su respuesta..."></textarea><br>
                        <div class="mt-0">
                          <button class="btn btn-primario text-end" type="submit"><small><i class="fas fa-paper-plane fa-1x"></i>&nbsp;Enviar</small></button>
                          <button class="btn btn-cancel" type="reset" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-ban fa-1x"></i>&nbsp;Cancelar</button>
                        </div>
                      </div>
                    </form>
                  </div>
              </div>
            </div>
        </div>
    </div>
@endsection