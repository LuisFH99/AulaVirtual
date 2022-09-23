<div class="modal" id="modalresult" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title fw-bolder text-white">Resultados del Examen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table
                    class="table table-sm table-borderless caption-top table-bordered border-2 border-primary text-center">
                    <thead>
                        <tr>
                            <th colspan="3"><strong>Resultados Optenidos en el Examen</strong> </th>
                        </tr>
                        <tr>
                            <th scope="col">Primer Intento</th>
                            <th scope="col">Segundo Intento</th>
                            <th scope="col">Tercer Intento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($notas as $nota)
                                <td>{{ is_null($nota) ? '-' : $nota }}</td>
                            @endforeach

                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
