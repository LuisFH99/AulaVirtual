<div class="{{ $vermodal ? 'modal fade show' : 'modal fade' }}" id="exampleModal" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true" style=" {{ $vermodal ? 'display: block;' : 'display: none' }}"
    aria-modal="{{ $vermodal ? 'true' : '' }}" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="font-weight-bold" id="exampleModalLabel">
                    Generar Nueva Pregunta para el Examen</h5>
                <button type="button" wire:click="cancelar" class="btn-close" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="addPregunta">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th>Enunciado de la Pregunta:</th><br>
                                <th id="first-input-date">
                                    <div class="form-floating m-0">
                                        <textarea class="form-control" wire:model.defer="enunciado" cols="50" placeholder="Enunciado de Pregunta" id="floatingTextarea"
                                            style="height: 10vh" required></textarea>
                                        <br><label for="floatingTextarea">Enunciado de Pregunta:</label>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th>Altenativa de pregunta:</th>
                                <th id="first-input-date">
                                    <div class="form-floating m-0">
                                        <textarea class="form-control" wire:model.defer="aternativas.alternativa1.respuesta" cols="50" placeholder="pegar enlace" id="floatingTextarea" style="height: 10vh"
                                            required></textarea>
                                        <label for="floatingTextarea">Alternativa 1:</label>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th>Puntaje</th>
                                <th><input type="number" wire:model.defer="aternativas.alternativa1.puntos" class="form-control" style="width: 65px" min="0"
                                        max="5" required><br></th>
                            </tr>

                            <tr>
                                <th>Altenativa de pregunta:</th>
                                <th id="first-input-date">
                                    <div class="form-floating m-0">
                                        <textarea class="form-control" wire:model.defer="aternativas.alternativa2.respuesta" cols="50" placeholder="pegar enlace" id="floatingTextarea" style="height: 10vh"
                                            required></textarea>
                                        <label for="floatingTextarea">Alternativa 2:</label>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th>Puntaje</th>
                                <th><input type="number" wire:model.defer="aternativas.alternativa2.puntos" class="form-control" style="width: 65px" min="0"
                                        max="5" required><br></th>
                            </tr>

                            <tr>
                                <th>Altenativa de pregunta:</th>
                                <th id="first-input-date">
                                    <div class="form-floating m-0">
                                        <textarea class="form-control" wire:model.defer="aternativas.alternativa3.respuesta" cols="50" placeholder="pegar enlace" id="floatingTextarea" style="height: 10vh"
                                            required></textarea>
                                        <label for="floatingTextarea">Alternativa 3:</label>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th>Puntaje</th>
                                <th><input type="number" wire:model.defer="aternativas.alternativa3.puntos" class="form-control" style="width: 65px" min="0"
                                        max="5" required><br></th>
                            </tr>

                            <tr>
                                <th>Altenativa de pregunta:</th>
                                <th id="first-input-date">
                                    <div class="form-floating m-0">
                                        <textarea class="form-control" wire:model.defer="aternativas.alternativa4.respuesta" cols="50" placeholder="pegar enlace" id="floatingTextarea" style="height: 10vh"
                                            required></textarea>
                                        <label for="floatingTextarea">Alternativa 4:</label>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th>Puntaje</th>
                                <th><input type="number" wire:model.defer="aternativas.alternativa4.puntos" class="form-control" style="width: 65px" min="0"
                                        max="5" required><br></th>
                            </tr>
                        </tbody>
                    </table>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primario"><i class="fa-solid fa-floppy-disk fa-1x"
                                style="font-size: 20px"></i>&nbsp;Agregar Pregunta</button>
                        <button type="button" class="btn btn-cancel" wire:click="cancelar"><i class="fa-solid fa-ban"
                                style="font-size: 20px"></i>&nbsp;Cancelar</button>
                    </div>

                </form>


            </div>

        </div>
    </div>
</div>
@if ($vermodal)
    <div class="modal-backdrop fade show"></div>
@endif
