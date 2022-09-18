<div class="card card-tarea mb-4 m-2 shadow-sm mt-4">
    <div class="card-title p-0 mb-4">
        <div class="tit mb-2">
            <div class="row">
                <div class="col-10">
                    <h4 class="mb-3 px-2">AGREGAR PREGUNTA AL CUESTIONARIO FINAL <button class="btn btn-sm btn-circle"
                            title="Insertar Nueva Pregunta" wire:click="viewModal"><i class="fa-solid fa-plus"
                                style="color: white"></i></button>
                    </h4>
                </div>
                <div class="col-2">
                    <div class="form-check form-switch">
                        <h4><input class="form-check-input" type="checkbox"
                                {{ $examen->is_visible == 1 ? 'checked' : '' }}
                                wire:click="cambiarEstado({{ $examen->is_visible }})">
                            <label class="form-check-label">{{ $examen->is_visible == 1 ? 'Visible' : 'No Visible' }}</label>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <span class="badge bg-primary">Examen final del curso: {{ $examen->publicacion->curso->nombre }}</span>
        <span class="badge bg-success">Peso: {{ $examen->peso }}</span>
        <span class="badge bg-warning">Tiempo: {{ $examen->tiempo }} minutos</span>

    </div>
    <div class="container">
        @if ($examen->preguntas->count() < 1)
            <div class="alert alert-primary" role="alert">
                Aun no se registraron preguntas para este examen.
            </div>
        @else
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                    aria-labelledby="pills-profile-tab">
                    <div class="temario">
                        <div class="accordion" id="accordion_temas">
                            @foreach ($examen->preguntas as $pregunta)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panel_{{ $pregunta->id }}">

                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelColl_{{ $pregunta->id }}"
                                            aria-expanded="true" aria-controls="panelColl_{{ $pregunta->id }}">
                                            {{ ucfirst($pregunta->pregunta) }} &nbsp; <i class="fas fa-trash border bg-danger"
                                                wire:click="quitarPregunta({{ $pregunta->id }})" style=" color:white; padding: 5px; border-radius: 40%"></i>
                                        </button>

                                    </h2>
                                    <div id="panelColl_{{ $pregunta->id }}"
                                        class="accordion-collapse collapse collapse"
                                        aria-labelledby="panel_{{ $pregunta->id }}">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-1 border d-flex justify-content-center">
                                                    <span>N°</span>
                                                </div>
                                                <div class="col-10 border d-flex justify-content-center">
                                                    <span>Alternativa</span>
                                                </div>
                                                <div class="col-1 border d-flex justify-content-center">
                                                    <span>Puntaje</span>
                                                </div>
                                                @foreach ($pregunta->alternativas as $key => $altenativa)
                                                    <div class="col-1 border d-flex justify-content-center">
                                                        <span>{{ $key + 1 }}°</span>
                                                    </div>
                                                    <div class="col-10 border">
                                                        <span>{{ ucfirst($altenativa->respuesta) }}</span>
                                                    </div>
                                                    <div class="col-1 border d-flex justify-content-center">
                                                        <span>{{ $altenativa->puntaje }}</span>
                                                    </div>
                                                @endforeach
                                                
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        @endif

    </div>
    @include('livewire.docentes.cuestionario.modal-addcuestionario')
</div>
<script>
    window.onload = function() {
        miNotificacion();
    }
</script>
