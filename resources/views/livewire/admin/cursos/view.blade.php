<div class="row d-flex justify-content-center">
    {{-- <div class="col-md-11 card card-success card-outline mt-1">
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
    <div class="col-md-12 mt-1 card" style="background-color: rgba(107, 155, 245, 0.12)"">
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
                            <td style="vertical-align: middle" class="text-center">
                                {{ $curso->descripcion }}</td>
                            <td style="vertical-align: middle;" class="text-center">
                                {{ $curso->subdescripcion }}</td>
                            <td style="vertical-align: middle;" class="text-center">
                                {{ $curso->categoria->nombre }}</td>

                            <td style="vertical-align: middle;">
                                <div class="d-flex justify-content-end">

                                    <button type="button" class="btn btn-info btn-sm mr-1"
                                        wire:click="Seleccionar({{ $curso->id }})">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm"
                                        wire:click="$emit('confirmEliminacion',{{ $curso->id }})"> <i
                                            class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
