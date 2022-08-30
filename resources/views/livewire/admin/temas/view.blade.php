<div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item font-weight-bold"><a href="#" class="text-dark">GESTION DE TEMAS</a></li>
          <li class="breadcrumb-item active font-weight-bold" aria-current="page">
            @foreach ($publicaciones as $p)
                {{strtoupper($p->curso->nombre)}}
            @endforeach
          </li>
          <li class="breadcrumb-item active font-weight-bold" aria-current="page">{{strtoupper($title)}}</li>
        </ol>
    </nav>
    <div class="col-md-12 mt-1 card" style="background-color: rgba(107, 155, 245, 0.12)">
        <div >
            <button class="btn btn-info btn-sm float-left col-sm-2 mt-3" title="Crear Elemento" wire:click.prevent="addNew">
                <i class="fas fa-plus-circle"></i>&nbsp;Nuevo Elemento</button> 
        </div>
        <div class="card-body mx-0 px-0">
            @if ($temas->count())
            <table class="table table-sm table-hover">
                <thead class="bg-olive">
                    <tr style="text-align: center;">
                        <th scope="col">#</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col" style="width: 150px">Fecha</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead> 
                <tbody>
                    @php
                    $cont = 1;
                    @endphp

                    @foreach ($modulos->temas as $t)
                        <tr>
                            <th style="vertical-align: middle" scope="row" class="text-center">{{$cont++}}</th>
                            <td style="vertical-align: middle" class="text-uppercase text-center">
                                {{$t->descripcion}}</td>
                            <td style="vertical-align: middle" class="text-center">
                                {{$t->fecha}}</td>
                            <td style="vertical-align: middle;" class="text-center">
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-info btn-sm mr-1"
                                        wire:click.prevent="edit ({{$t->id}})">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm"
                                        onclick="Confirm('{{$t->id}}')"> 
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <center><h6 class="ml-2 font-weight-bold text-dark">Registros no encontrados en el sistema</h6></center>
            @endif
        </div>
    </div>
    @include('livewire.admin.temas.create')
</div>


{{-- <div>
    @foreach ($temas as $t)
    <h5 class="font-weight-bold mt-0 mb-3" style="text-align: center" wire:ignore.self>{{strtoupper($t->nombre)}}</h5>
    @endforeach
    <div class="row">
        <h6 class="font-weight-bold">Crear Nuevo Tema:</h6>&nbsp;
        <a class="btn btn-info btn-sm mr-1 mb-2" wire:click.prevent="addNew" title="Agregar Temas"><i class="fas fa-plus-circle"></i></a>
        
        <table class="table table-sm">
            <thead class="bg-blue">
                <tr style="text-align: center;">
                    <th scope="col">#</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col" style="width: 150px">Fecha</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                    @php
                    $cont = 1;
                    @endphp

                    @foreach ($modulos->temas as $t)
                        <tr>
                            <th style="vertical-align: middle" class="text-center" scope="row">{{$cont++}}</th>
                            <td style="vertical-align: middle" class="text-center">{{$t->descripcion}}</td>
                            <td style="vertical-align: middle" class="text-center">{{$t->fecha}}</td>
                            <td style="vertical-align: middle;" >
                                <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-info btn-sm mr-1"
                                wire:click.prevent="edit ({{$t->id}})">
                                <i class="fas fa-edit"></i>
                                </button>
                                <button type="button" class="btn btn-danger btn-sm"
                                    onclick="Confirm('{{$t->id}}')"> 
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
        @include('livewire.admin.temas.create')
    </div>
</div> --}}

<script>
    function Notificacion() {
        Livewire.on('notify', function(datos) {
            $(document).Toasts('create', {
                class: datos.modo,
                title: 'Mensaje de Sistema',
                body: datos.mensaje,
                autohide: true,
                delay: 2000
            })
        });

    }
    window.onload = function() {
        Notificacion();
    }
</script>
