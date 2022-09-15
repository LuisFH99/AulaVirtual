<div class="container">
    <h3 style="font-size: 1.4rem">Examen Final de Curso : {{ $examen->publicacion->curso->nombre }}</h3>
    <form wire:submit.prevent="sendTest">
        @foreach ($examen->preguntas->shuffle() as $pregunta)
            <div class="card mb-3 ">
                <div class="card-header">{{ $pregunta->pregunta }}</div>

                <div class="card-body">
                    @foreach ($pregunta->alternativas->shuffle() as $key => $alternativa)
                        <div class="form-check">
                            <input class="form-check-input" type="radio"
                                wire:model.defer="respuestas.alternativa{{ $pregunta->id }}" name="option{{ $pregunta->id }}"
                                id="option{{ $alternativa->id }}" value="{{ $alternativa->id }}">
                            <label class="form-check-label" for="option{{ $alternativa->id }}">
                                {{ $alternativa->respuesta }}
                            </label>
                        </div>
                    @endforeach


                </div>
            </div>
        @endforeach
        <div class="form-group row mt-3">
            <div class="col-md-6">
                <button type="submit" class="btn btn-success text-white btn-finalizar-examen">
                    <i class="far fa-paper-plane" style="color: #FFF; font-size: 19px; margin-right: 5px"></i>Enviar Respuestas
                </button>
            </div>
        </div>
    </form>
</div>
