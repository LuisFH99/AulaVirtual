<div class="row pt-2 justify-content-center">
    <div class="d-flex justify-content-center col-12">
        <h3 class="font-weight-bold">Curso: {{ $curso }}</h3>
    </div>
    <div class="col-md-4">
        <form wire:submit.prevent="registrar" class="add-student">
            <h4 class="text-bold">Inscribir a Estudiante</h4>
            <p>Ingresar los datos requeridos para inscribir al estudiante al curso</p>
            <input type="text" wire:model.defer="apellidos" class="form-control" id="apellidos"
                placeholder="Apellidos del estudiante" autocomplete="off">
            <input type="text" wire:model.defer="nombes" class="form-control" id="nombres"
                placeholder="Nombres del estudiante" autocomplete="off">
            <input type="text" wire:model.defer="dni" class="form-control" id="dni"
                placeholder="N° DNI del estudiante" autocomplete="off" maxlength="8">
            <input type="text" wire:model.defer="correo" class="form-control" id="correo"
                placeholder="Correo del estudiante" autocomplete="off">
            <input type="text" wire:model.defer="celular" class="form-control" id="celular"
                placeholder="N° de Celular" autocomplete="off" maxlength="9">
            <input type="date" wire:model.defer="fecha_naciemiento" class="form-control" id="fecha_nacimiento"
                placeholder="Fecha Nacimiento" autocomplete="off">
            <input type="text" wire:model.defer="profesion" class="form-control" id="profesion"
                placeholder="Especifique profesion/ocupacion" autocomplete="off">
            <button type="submit" class="btn btn-primary"><i class="fas fa-user-plus mr-2"></i>Agregar
                estudiante</button>
        </form>
    </div>
    <div class="col-md-8 studen-panel">
        <div class="row mb-2">
            <h4 class="col-11 text-bold">Lista de Estudiantes</h4>
            <button type="button" class="col-1 btn-sm btn-primary" wire:click="abrirmodal"><i
                    class="fas fa-list-ol"></i></button>
        </div>
        <table>
            <tbody>
                @if (!is_null($matriculados))
                    @foreach ($matriculados as $matriculado)
                        <tr>
                            <div class="card-studen mb-1">
                                <div class="seccion-name">
                                    <h5><i
                                            class="fas fa-check-circle mr-2"></i>{{ $matriculado->estudiante->datos->fullname() }}
                                    </h5>
                                </div>
                                <div class="row">
                                    <p class="col-4">Correo: {{ $matriculado->estudiante->datos->correo }}</p>
                                    <p class="col-2">DNI: {{ $matriculado->estudiante->datos->dni }}</p>
                                    <p class="col-5">Especialidad: {{ $matriculado->estudiante->profesion }}</p>
                                </div>
                            </div>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <div class="card-studen">
                            <div class="seccion-name">
                                <h5>No hay Estudiantes Matriculados</h5>
                            </div>
                        </div>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
    @include('livewire.admin.matricula.matricular')
</div>
