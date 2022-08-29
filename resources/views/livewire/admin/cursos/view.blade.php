{{-- <div class="row d-flex justify-content-center">
    <div class="col-md-11 card card-success card-outline mt-1">
       <div class="card-body">
           <div class="row">
               <div class="col-md-4">
                   <label class="form-label">N° DNI:<strong style="color: red">*</strong> </label>
                   <input type="text" class="form-control" name="dni" autocomplete="off" wire:model="dni">
                   {{ $dni }}
                   @error('dni')
                       <small class="text-danger">{{ $message }}</small>
                   @enderror
               </div>
               <div class="col-md-4">
                   <label class="form-label">Apellidos:<strong style="color: red">*</strong> </label>
                   <input type="text" class="form-control" name="apellidos" autocomplete="off"
                       wire:model="apellidos">
                   @error('apellidos')
                       <small class="text-danger">{{ $message }}</small>
                   @enderror
               </div>
               <div class="col-md-4">
                   <label class="form-label">Nombres:<strong style="color: red">*</strong> </label>
                   <input type="text" class="form-control" name="nombres" autocomplete="off" wire:model="nombres">
                   @error('nombres')
                       <small class="text-danger">{{ $message }}</small>
                   @enderror
               </div>
               <div class="col-md-6">
                   <label class="form-label">Correo:<strong style="color: red">*</strong> </label>
                   <input type="text" class="form-control" name="correo" autocomplete="off" wire:model="correo">
                   @error('correo')
                       <small class="text-danger">{{ $message }}</small>
                   @enderror
               </div>
               <div class="col-md-6">
                   <label class="form-label">Fecha Nacimiento:<strong style="color: red">*</strong> </label>
                   <input type="text" class="form-control" name="fecha_nacimiento" autocomplete="off"
                       wire:model="fecha_nacimiento">
                   @error('fecha_nacimiento')
                       <small class="text-danger">{{ $message }}</small>
                   @enderror
               </div>
           </div>
       </div>
       <div class="card-footer d-flex justify-content-center">
           <button type="button" class="btn btn-primary mr-3" wire:click="Guardar"><i
                   class="far fa-save mr-2"></i>Guardar</button>
           <button type="button" class="btn btn-danger" wire:click="limpiar"><i
                   class="far fa-times-circle mr-2"></i>Cancelar</button>
       </div>
   </div> --}}
    {{-- <div class="col-md-12 mt-1 card" style="background-color: rgba(107, 155, 245, 0.12)">
        <div >
            <button class="btn btn-info btn-sm float-right col-sm-2 my-2" title="Crear Elemento" wire:click.prevent="addNew">
                <i class="fas fa-plus-circle"></i>&nbsp;Nuevo Elemento</button> 
        </div>
        <div class="card-body mx-0 px-0">
            <table class="table table-sm">
                <thead class="bg-olive">
                    <tr style="text-align: center;">
                        <th scope="col">#</th>
                        <th scope="col">Nombre de Curso</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">¿Qué se aprenderá?</th>
                        <th scope="col">Categoria</th>
                        <th scope="col" style="width: 100px">Acción</th>
                    </tr>
                </thead> 
                <tbody>
                    @foreach ($cursos as $key => $curso)
                        <tr>
                            <th style="vertical-align: middle" scope="row">{{ $key + 1 }}</th>
                            <td style="vertical-align: middle" class="text-uppercase">
                                {{ $curso->nombre }}</td>
                            <td style="vertical-align: middle; text-align: justify">
                                {{ $curso->descripcion }}</td>
                            <td style="vertical-align: middle;text-align: justify" class="px-3">
                                {{ $curso->subdescripcion }}</td>
                            <td style="vertical-align: middle;" class="text-center">
                                {{ $curso->categoria->nombre }}</td>

                            <td style="vertical-align: middle;">
                                <div class="d-flex justify-content-end">

                                    <button type="button" class="btn btn-info btn-sm mr-1"
                                        wire:click.prevent="edit ({{$curso->id}})">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm"
                                        onclick="Confirm('{{$curso->id}}')"> 
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('livewire.admin.cursos.create')

</div> --}}


<div id="accordion">
    <div class="form-group row ">
        <div class="input-group rounded col-md-9 mt-2">
            <label for="" class="col-form-label mr-2">Crear Nuevo Curso:</label>
            <button type="button" class="btn btn-info" wire:click.prevent="addNew">
                <i class="fas fa-plus-circle mr-1"></i>Nuevo</button>
        </div>
        @include('livewire.admin.cursos.create')
    </div>

    @foreach ($cursos as $key => $curso)
    <div class="card ">
        <div class="card-header" >
            <div class="row">
                <div class="col-9">
                    <h3 class="card-title font-weight-bold text-uppercase mt-1" >{{$curso->nombre}}</h3>
                </div>
                <div class="col-3 d-flex justify-content-end">
                    <a data-toggle="collapse"  href="#collapse{{$curso->id}}" class="btn btn-primary btn-sm mr-1" title="Informacion Detallada"><i class="fas fa-info-circle"></i></a>
                </div>
            </div>
        </div>
        <div id="collapse{{$curso->id}}" class="collapse" data-parent="#accordion" >
            <div class="card-body">
                <div class="card-body mx-0 px-0">
                    <table class="table table-sm">
                        <thead class="bg-olive">
                            <tr style="text-align: center;">
                                <th scope="col">Descripcion</th>
                                <th scope="col">¿Qué se aprenderá?</th>
                                <th scope="col">Categoria</th>
                                <th scope="col" style="width: 100px">Acción</th>
                            </tr>
                        </thead> 
                        <tbody>
                                <tr>
                                    <td style="vertical-align: middle; text-align: justify">
                                        {{ $curso->descripcion }}</td>
                                    <td style="vertical-align: middle;text-align: justify" class="px-3">
                                        {{ $curso->subdescripcion }}</td>
                                    <td style="vertical-align: middle;" class="text-center">
                                        {{ $curso->categoria->nombre }}</td>
        
                                    <td style="vertical-align: middle;">
                                        <div class="d-flex justify-content-end">
                                            <button type="button" class="btn btn-info btn-sm mr-1"
                                                wire:click.prevent="edit ({{$curso->id}})">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm"
                                                onclick="Confirm('{{$curso->id}}')"> 
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{ $cursos->links() }}
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



