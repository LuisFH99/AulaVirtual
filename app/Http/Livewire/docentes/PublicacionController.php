<?php

namespace App\Http\Livewire\Docentes;

use App\Models\Examen;
use Livewire\Component;
use App\Models\Publicacion;
use App\Models\RecursosModulo;
use App\Models\Tarea;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class PublicacionController extends Component
{
    use WithFileUploads;
    public $publicacion_id;
    public $vermodal = false;
    public $fromrecurso = false;
    public $formexamen = false;
    public $nombre_curso;
    public $moduloselect, $temaselect, $temaid, $moduloid;
    public $nombre, $fecha, $doc_recurso;
    public $duracion, $peso;

    public function mount()
    {
        $this->publicacion_id = request('idpublicacion');
    }

    public function render()
    {
        $publicacion = Publicacion::where('id', $this->publicacion_id)->first();
        $this->nombre_curso = $publicacion->curso->nombre;
        return view('livewire.docentes.publicacion.view', compact('publicacion'));
    }

    public function addRecurso($modulo, $tema, $id)
    {
        $this->vermodal = true;
        $this->fromrecurso = true;
        $this->moduloselect = $modulo;
        $this->temaselect = $tema;
        $this->temaid = $id;
    }

    public function addTarea($modulo, $id)
    {
        $this->vermodal = true;
        $this->moduloselect = $modulo;
        $this->moduloid = $id;
    }

    public function addExamenFinal()
    {
        $examen = Examen::where('publicacion_id', $this->publicacion_id)->where('is_final', 1)->first();
        // dd($examen);
        if ($examen) {
            session(['idexamen' => $examen->id]);
            return redirect()->route('docentes.cuestionario.index');
        } else {
            $this->vermodal = true;
            $this->formexamen = true;
        }
    }

    public function cancelar()
    {
        $this->reset([
            'vermodal', 'fromrecurso', 'moduloselect',
            'temaselect', 'temaid', 'nombre', 'fecha',
            'moduloid', 'doc_recurso', 'formexamen'
        ]);
    }

    public function guardarRecurso()
    {
        $directoryname = $this->nombre_curso . "_" . $this->publicacion_id;
        if ($this->doc_recurso) {
            $filename = date("dmYhis") . "-" . $this->nombre . "." . $this->doc_recurso->getClientOriginalExtension();
            $directory = $this->doc_recurso->storeAS('public/' . $directoryname . '/recursos', $filename);
            $url = Storage::url($directory);
            $recurso = new RecursosModulo();
            $recurso->ruta = $url;
            $recurso->descripcion = $this->nombre;
            $recurso->temas_id = $this->temaid;
            $recurso->save();
        }
        $this->cancelar();
    }

    public function guardarTarea()
    {
        $directoryname = $this->nombre_curso . "_" . $this->publicacion_id;
        if ($this->doc_recurso) {
            $filename = date("dmYhis") . "-" . $this->doc_recurso->getClientOriginalExtension();
            $directory = $this->doc_recurso->storeAS('public/' . $directoryname . '/tareas', $filename);
            $url = Storage::url($directory);
            $tarea = new Tarea();
            $tarea->descripcion = $this->nombre;
            $tarea->fecha_entrega = $this->fecha;
            $tarea->ruta_archivo = $url;
            $tarea->modulos_id = $this->moduloid;
            $tarea->save();
        }
        $this->cancelar();
    }

    public function guardarExamen()
    {
        $test = new Examen();
        $test->tiempo = $this->duracion;
        $test->peso = $this->peso;
        $test->publicacion_id = $this->publicacion_id;
        $test->is_final = 1;
        $test->is_visible = 0;
        $test->save();
        $this->cancelar();
    }

    public function eliminarRecurso($id)
    {
        $recurso = RecursosModulo::find($id);
        $recurso->delete();
    }

    public function eliminarTarea($id)
    {
        $tarea = Tarea::find($id);
        $tarea->delete();
    }
}
