<div class="container">
    <h3 style="font-size: 1.4rem">Examen Final de Curso : {{ $examen->publicacion->curso->nombre }}</h3>
    <form action="">
        @foreach ($examen->preguntas as $pregunta)
            <div class="card mb-3 ">
                <div class="card-header">{{ $pregunta->pregunta }}</div>

                <div class="card-body">
                    @foreach ($pregunta->alternativas as $alternativa)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rpta1" id="option-{{$alternativa->id}}"
                                value="{{$alternativa->id}}">
                            <label class="form-check-label" for="option-{{$alternativa->id}}">
                                {{$alternativa->respuesta}}
                            </label>
                        </div>
                    @endforeach


                </div>
            </div>
        @endforeach

    </form>
</div>
