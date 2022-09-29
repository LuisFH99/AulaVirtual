<div>
        <div class="container">
        <div class="card card-tarea mb-4 m-5 shadow-sm mt-4">
          {{-- Cabecera Foro--}}
            <div class="card-title p-0 mb-0 ">
              <div class="tit mb-2">
                <h5 class="mb-3 px-2 fw-bold">Foro Consulta: {{$foro->publicaciones->curso->nombre}} - {{$foro->modulos->nombre}}</h5>
              </div>
              <div class="tit2 mt-4 text-white pt-3 " style="background-color: #2d529f;">
                <p style="font-family: font-semibold">&nbsp;La fecha límite para publicar en este foro es miércoles, {{date('d F Y', strtotime($foro->publicaciones->fecha_fin))}}.</p>
              </div>
            </div>
            {{-- Descripcion Foro --}}
            <div class="d-flex" style="border: 1px solid #2d529f">
              <div class="m-2 ml-0" style="width: 100%">
                <small class="fw-bold p-2">Foro consulta:  {{$foro->publicaciones->curso->nombre}}</small><br>
                <small class="p-2">{{$fech_ini}}</small><br><br>
                <p class="p-3 m-0 mb-5" style="text-align: justify; background-color: #e1efe9;border: 1px solid salmon; border-radius: 5px;">
                  {{$foro->descripcion}}
                </p>

                <div class="my-3 d-flex justify-content-end">
                  <a class="btn btn-primary btn-sm" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fas fa-pencil-alt"></i>&nbsp;Responder
                  </a>
                </div>
                <div class="collapse my-2" id="collapseExample">
                  <form wire:submit.prevent="addForo">
                    <div class="card card-body">
                      <textarea class="text-dark form-control mb-0  @error('descripcion') is-invalid @enderror" name="" id="" cols="30" rows="8" wire:model.defer="descripcion" placeholder="Escriba su respuesta..."></textarea><br>
                      @error('descripcion')<small class="text-danger er">{{$message}}</small>@enderror
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
            @foreach ($respuestas as $r)
            <div style="border: 1px solid #2d529f" class="mb-2">
              <div class=" m-2 ml-0">
                <div class="row">
                  <div class="col-md-1">
                    <img class="m-0 p-0 img-fluid" src="{{ asset('img/tutor.png') }}" width="60" alt="foto usuario">
                  </div>
                  <div class="d-flex flex-column col-md-11 m-0 p-0 mt-2">
                    <small class="fw-bold px-2">Re: Foro Consulta {{$r->publicaciones->curso->nombre}}</small>
                    <small class=" px-2">de <b style="color: #2d529f">{{$r->users->personas->fullName()}} - {{date('d F Y, H:i:s', strtotime($r->created_at))}}</b></small>
                  </div>
                </div><br>
                  <p class="p-2" style="text-align: justify">{{$r->descripcion}}</p>
                  
                  {{-- @if (auth()->user()->id != $r->users_id) --}}
                  <div class="my-3 d-flex justify-content-end">
                    <a class="btn btn-primary btn-sm" data-bs-toggle="collapse" href="#collapseExample{{$r->id}}" role="button" aria-expanded="false" aria-controls="collapseExample2">
                      <i class="fas fa-pencil-alt"></i>&nbsp;Responder
                    </a>
                  </div>      
                  {{-- @endif --}}

                  
                  <div class="collapse my-2" id="collapseExample{{$r->id}}">
                    <form wire:submit.prevent="addForo">
                      <div class="card card-body">
                        {{-- <textarea class="text-dark form-control mb-0" name="" id="" cols="30" rows="8" placeholder="Escriba su respuesta..."></textarea><br> --}}
                        <textarea class="text-dark form-control mb-0  @error('descripcion') is-invalid @enderror" name="" id="" cols="30" rows="8" wire:model.defer="descripcion" placeholder="Escriba su respuesta..."></textarea><br>
                        @error('descripcion')<small class="text-danger er">{{$message}}</small>@enderror
                        <div class="mt-0 ">
                          <button class="btn btn-primario text-end" type="submit"><small><i class="fas fa-paper-plane fa-1x"></i>&nbsp;Enviar</small></button>
                          <button class="btn btn-cancel" type="reset" data-bs-toggle="collapse" href="#collapseExample{{$r->id}}" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-ban fa-1x"></i>&nbsp;Cancelar</button>
                        </div>
                      </div>
                    </form>
                  </div>
              </div>
            </div>
            @endforeach

            <!-- 
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
                  <div class="my-3 d-flex justify-content-end">
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
            </div> -->

            <div class="d-flex">
              {{ $respuestas->links() }}
            </div>
        </div>
    </div>
</div>
