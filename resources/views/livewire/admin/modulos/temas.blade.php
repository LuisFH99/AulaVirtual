{{-- <div class="row">
    
    <h6 class="font-weight-bold">Listado de Temas: </h6>&nbsp;
    <a class="btn btn-info btn-sm mr-1 mb-2" style="vertical-align: middle" title="Gestionar Temas" wire:click="temas"><i class="fas fa-tasks"></i></a>
    @if ($temas->count())
    <table class="table table-sm table-hover">
        <thead class="bg-blue">
            <tr style="text-align: center;">
                <th scope="col">#</th>
                <th scope="col">Descripcion</th>
                <th scope="col" style="width: 150px">Fecha</th>
            </tr>
        </thead>
        <tbody>
                @php
                $cont = 1;
                @endphp
                    @foreach ($temas as $t)
                    <tr>
                        <th style="vertical-align: middle" class="text-center" scope="row">{{$cont++}}</th>
                        <td style="vertical-align: middle" class="text-center">{{$t->descripcion}}</td>
                        <td style="vertical-align: middle" class="text-center">{{$t->fecha}}</td>
                    </tr>
                    @endforeach
        </tbody>
    </table>
    @else
    <h6 class="ml-2 font-weight-bold text-danger">Registros no encontrados</h6>
    @endif

</div> --}}

<div class="col-md-12 mt-1 card" style="background-color: rgba(107, 155, 245, 0.12)">
    <div class="row m-2 mb-0">
        {{-- <button class="btn btn-info btn-sm float-left col-sm-2 mt-3" title="Crear Elemento" wire:click.prevent="addNew">
            <i class="fas fa-plus-circle"></i>&nbsp;Nuevo Elemento</button>  --}}
        <h6 class="font-weight-bold">Listado de Temas: </h6>&nbsp;
        <a class="btn btn-info btn-sm mr-1 " style="vertical-align: middle" title="Gestionar Temas" wire:click="temas"><i class="fas fa-tasks"></i></a>
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

                @foreach ($temas as $t)
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