<div class="card card-tarea mb-4 m-2 shadow-sm mt-4">
    <div class="card-title p-0 mb-4">
        <div class="tit mb-2 py-2">
            <h4 class="mb-3 px-2">TRABAJO DEL {{ strtoupper($tarea->modulo->nombre) }}</h4>
            {{-- <small class="px-2"><b>Apertura:</b> Lunes, miercoles 26 de julio del 2022</small><br> --}}
            <small class="px-2"><b>Cierre:</b> {{ date(' l, d  F  Y', strtotime($tarea->fecha_entrega)) }}</small>
        </div>
        {{-- <div class="tit2 mt-4">
            <a href="/" class="recurso" target="_blank"><img class="img-fluid" src="{{ asset('img/img_tarea.svg') }}"
                    width="20" alt="">&nbsp;Archivo_tarea_modulo_1.pdf</a>&nbsp; <small>Lunes, miercoles 26
                de julio
                del 2022, 14:02</small>
        </div> --}}
    </div>
    <h4 class="px-3">Archivos enviados</h4>
    <ul class="lista-val">
        <li><i class="fa-solid fa-angle-right" style="color: gray"></i>&nbsp;Tamaño maximo de archivo: 10 MB</li>
        <li><i class="fa-solid fa-angle-right" style="color: gray"></i>&nbsp;Numero maximo de archivo: 01</li>
    </ul>
    <div class="card-body text-center">
        <div class="d-flex">
            <form>
                <div class="float-start">
                    <i class="fa-solid fa-folder fa-1x"></i> Archivos
                </div><br>
                <div class="card p-2">
                    {{-- <div class="drop-zone mt-2">
                        <i class="icon fa-solid fa-cloud-arrow-up"></i>
                        <span class="drop-zone__prompt">Suelte el archivo aquí o haga clic para cargar</span>
                        <input type="file" wire:model="doc_entrega" name="myFile" class="drop-zone__input" accept="application/pdf">
                    </div> --}}
                <input type="file" class="form-control-file" wire:model="doc_entrega" accept='.txt,.doc,.docx,.xlsx,.xls,.pptx,.ppt,.pdf,.rar,.zip'>  
                </div><br>
                <div class="text-start">
                    <button type="button" wire:click="guardarEntregable" class="btn btn-primario">
                        <i class="fa-solid fa-paper-plane fa-1x" style="color: white"></i>&nbsp;Guardar Cambios
                    </button>
                    {{-- <button type="submit" class="btn btn-cancel"><i class="fa-solid fa-ban fa-1x"
                            style="color: white"></i>&nbsp;Cancelar</button> --}}
                </div>

            </form>

            {{-- <a href="/entrega" class="btn btn-card mb-2">Guardar&nbsp;<i class="fa-solid fa-floppy-disk"></i></a> --}}
        </div>
    </div>

</div>
