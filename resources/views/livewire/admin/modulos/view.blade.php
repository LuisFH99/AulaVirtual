




<div id="accordion" wire:ignore.self>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item font-weight-bold"><a href="#" class="text-dark">GESTION DE MODULOS</a></li>
          <li class="breadcrumb-item active font-weight-bold" aria-current="page">@foreach ($curso as $c){{strtoupper($c->nombre)}}@endforeach
          </li>
        </ol>
    </nav>
    <div class="form-group row ">
        <div class="input-group rounded col-md-9 mt-2">
            <label for="" class="col-form-label mr-2">Crear Nuevo Modulo:</label>
            <button type="button" class="btn btn-info" wire:click.prevent="addNew">
                <i class="fas fa-plus-circle mr-1"></i>Nuevo</button>
        </div>
        @include('livewire.admin.modulos.create')
    </div>

    @foreach ($publicacion->modulos as $m)
    <div class="card ">
        <div class="card-header" >
            <div class="row">
                <div class="col-9">
                    <h3 class="card-title font-weight-bold text-uppercase mt-1" >{{$m->nombre}}</h3>&nbsp;&nbsp;
                    <a href="{{$m->link}}" target="_blank" class="font-weight-bold" style="vertical-align: middle"><i class="fas fa-paperclip"></i>&nbsp;Link asignado</a>
                </div>
                <div class="col-3 d-flex justify-content-end">
                    <button class="btn btn-success btn-sm mr-1" wire:click.prevent="edit({{$m->id}})" title="Editar Modulo"><i class="fas fa-edit"></i></button>
                    <a data-toggle="collapse"  href="#collapse{{$m->id}}" class="btn btn-primary btn-sm mr-1" title="Desplegar Temas" wire:click.prevent="getTemas({{$m->id}})"><i class="fas fa-info-circle"></i></a>
                    <button type="button" class="btn btn-danger btn-sm" title="Eliminar" onclick="Confirm('{{$m->id}}')"><i class="fas fa-trash-alt"></i>
                </button>
                </div>
            </div>
        </div>
        <div wire:ignore.self id="collapse{{$m->id}}" class="collapse" data-parent="#accordion" >
            <div class="card-body">
                {{-- <livewire:admin.tema-controller /> --}}
                <h6 class="text-center text-danger font-weight-bold" wire:loading  wire:target="getTemas">Procesando Listado de Temas...</h6>
                <div wire:loading.remove>
                    @include('livewire.admin.modulos.temas')
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>


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