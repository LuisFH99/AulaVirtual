<div class="card card-tarea mb-4 m-2 shadow-sm mt-4">
    <div class="card-title p-0 mb-4">
        <div class="tit mb-2">
            <h4 class="mb-3 px-2">AGREGANDO CUESTIONARIO FINAL</h4>
        </div>
    </div>
    <h4 class="p-3">GENERAL</h4>
    <hr><br>
   
    <!-- Creacion de las preguntas-->
    <div class="card-title p-0 mb-4">
        <div class="tit mb-2">
            <h4 class="mb-3 px-2">PREGUNTAS <button class="btn btn-sm btn-circle" title="Insertar Nueva Pregunta"><i
                        class="fa-solid fa-plus" style="color: white"></i></button></h4>
            <form action="">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th>Enunciado de la Pregunta 1:</th><br>
                            <th id="first-input-date">
                                <div class="form-floating m-0">
                                    <textarea class="form-control" cols="50" placeholder="pegar enlace" id="floatingTextarea" style="height: 10vh"
                                        required></textarea>
                                    <br><label for="floatingTextarea">Pregunta 1:</label>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>Enunciado de la Pregunta 2:</th><br>
                            <th id="first-input-date">
                                <div class="form-floating m-0">
                                    <textarea class="form-control" cols="50" placeholder="pegar enlace" id="floatingTextarea" style="height: 10vh"
                                        required></textarea>
                                    <br><label for="floatingTextarea">Pregunta 2:</label>
                                </div>
                            </th>
                        </tr>
                    </tbody>
                </table>
                <button class="btn btn-card mb-2">Guardar&nbsp;<i class="fa-solid fa-floppy-disk fa-1x"></i></button>
            </form>
        </div>
    </div>
    <!-- Creacion de las alternativas-->
    <div class="card-title p-0 mb-4">
        <div class="tit mb-2">
            <h4 class="mb-3 px-2">ALTERNATIVAS <button class="btn btn-sm btn-circle"
                    title="Insertar Nueva Alternativa"><i class="fa-solid fa-plus" style="color: white"></i></button>
            </h4>
            <form action="">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th>Pregunta</th>
                            <th>
                                <select name="" id="" class="form-select" required>
                                    <option value="">Seleccionar Pregunta</option>
                                    <option value="">Pregunta 1</option>
                                    <option value="">Pregunta 2</option>
                                </select><br>
                            </th>
                        </tr>
                        <tr>
                            <th>Eleccion de la pregunta:</th>
                            <th id="first-input-date">
                                <div class="form-floating m-0">
                                    <textarea class="form-control" cols="50" placeholder="pegar enlace" id="floatingTextarea" style="height: 10vh"
                                        required></textarea>
                                    <label for="floatingTextarea">Alternativa 1:</label>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>Puntaje</th>
                            <th><input type="number" class="form-control" style="width: 65px" min="0"
                                    max="1" required><br></th>
                        </tr>

                        <tr>
                            <th>Eleccion de la pregunta:</th>
                            <th id="first-input-date">
                                <div class="form-floating m-0">
                                    <textarea class="form-control" cols="50" placeholder="pegar enlace" id="floatingTextarea" style="height: 10vh"
                                        required></textarea>
                                    <label for="floatingTextarea">Alternativa 2:</label>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>Puntaje</th>
                            <th><input type="number" class="form-control" style="width: 65px" min="0"
                                    max="1" required><br></th>
                        </tr>

                        <tr>
                            <th>Eleccion de la pregunta:</th>
                            <th id="first-input-date">
                                <div class="form-floating m-0">
                                    <textarea class="form-control" cols="50" placeholder="pegar enlace" id="floatingTextarea" style="height: 10vh"
                                        required></textarea>
                                    <label for="floatingTextarea">Alternativa 3:</label>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>Puntaje</th>
                            <th><input type="number" class="form-control" style="width: 65px" min="0"
                                    max="1" required><br></th>
                        </tr>

                        <tr>
                            <th>Eleccion de la pregunta:</th>
                            <th id="first-input-date">
                                <div class="form-floating m-0">
                                    <textarea class="form-control" cols="50" placeholder="pegar enlace" id="floatingTextarea" style="height: 10vh"
                                        required></textarea>
                                    <label for="floatingTextarea">Alternativa 4:</label>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>Puntaje</th>
                            <th><input type="number" class="form-control" style="width: 65px" min="0"
                                    max="1" required><br></th>
                        </tr>
                    </tbody>
                </table>
                <button class="btn btn-card mb-2">Guardar&nbsp;<i class="fa-solid fa-floppy-disk fa-1x"></i></button>
            </form>
        </div>
    </div>

</div>
