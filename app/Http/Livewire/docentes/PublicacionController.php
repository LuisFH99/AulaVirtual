<?php

namespace App\Http\Livewire\Docentes;

use App\Models\Entregable;
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
    protected $listeners = ['eliminarRecurso', 'eliminarTarea'];

    protected $rulesRecursos = [
        'nombre' => 'required',
        'doc_recurso' => 'required|max:5120',
    ];
    protected $rulesTarea = [
        'nombre' => 'required',
        'fecha' => 'required',
        'doc_recurso' => 'max:5120',
    ];

    protected $rulesExamen = [
        'duracion' => 'required',
        'peso' => 'required',
    ];

    protected $msjError = [
        'nombre.required' => 'Este campo es requerido',
        'doc_recurso.required' => 'Debe subir un archivo como recurso',
        'doc_recurso.max' => 'El tamaño maximo del archivo es 5MB',
        'fecha.required' => 'Indicar fecha maxima de entrega',
        'duracion.required' => 'Indicar la duracion del examen',
        'peso.required' => 'Indicar el peso del examen'
    ];

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

    public function addExamenModulo($modulo, $id)
    {
        $examen = Examen::where('publicacion_id', $this->publicacion_id)->where('modulo_id', $id)->first();
        if ($examen) {
            session(['idexamen' => $examen->id]);
            return redirect()->route('docentes.cuestionario.index');
        } else {
            $this->vermodal = true;
            $this->moduloselect = $modulo;
            $this->moduloid = $id;
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
        $this->validate($this->rulesRecursos, $this->msjError);
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

            $datos = [
                'modo' => 'success',
                'mensaje' => 'Nuevo recurso agregado'
            ];
            $this->emit('alertaSistema', $datos);
        }

        $this->cancelar();
    }

    public function guardarTarea()
    {
        $this->validate($this->rulesTarea, $this->msjError);
        $url = null;
        $directoryname = $this->nombre_curso . "_" . $this->publicacion_id;
        if ($this->doc_recurso) {
            $filename = date("dmYhis") . "-" . $this->doc_recurso->getClientOriginalName();
            $directory = $this->doc_recurso->storeAS('public/' . $directoryname . '/tareas', $filename);
            $url = Storage::url($directory);
        }
        $tarea = new Tarea();
        $tarea->descripcion = $this->nombre;
        $tarea->fecha_entrega = $this->fecha;
        $tarea->ruta_archivo = $url;
        $tarea->modulos_id = $this->moduloid;
        $tarea->save();

        $datos = [
            'modo' => 'success',
            'mensaje' => 'La Agrego nueva tarea'
        ];
        $this->emit('alertaSistema', $datos);
        $this->cancelar();
    }

    public function guardarExamen()
    {
        $this->validate($this->rulesExamen, $this->msjError);
        $test = new Examen();
        $test->tiempo = $this->duracion;
        $test->peso = $this->peso;
        $test->publicacion_id = $this->publicacion_id;
        $test->is_final = (is_null($this->moduloid) ? 1 : null);
        $test->modulo_id = (is_null($this->moduloid) ? null : $this->moduloid);
        $test->is_visible = 0;
        $test->save();
        $datos2 = [
            'modo' => 'warning',
            'mensaje' => 'Ingrese al Examen para Agregar Preguntas'
        ];
        $this->emit('alertaSistema', $datos2);
        $datos = [
            'modo' => 'success',
            'mensaje' => 'Se Genero Nuevo Examen'
        ];
        $this->emit('alertaSistema', $datos);
        $this->cancelar();
    }

    public function eliminarRecurso($id)
    {
        $ruta = str_replace('storage', 'public', RecursosModulo::where('id', $id)->value('ruta'));
        Storage::delete($ruta);
        RecursosModulo::destroy($id);
        $datos = [
            'modo' => 'success',
            'mensaje' => 'Recurso Eliminado'
        ];
        $this->emit('alertaSistema', $datos);
    }

    public function eliminarTarea($id)
    {
        if (Entregable::where('tarea_id', $id)->exists()) {
            $datos = [
                'modo' => 'error',
                'mensaje' => 'Existen Entregas, ¡No se puede Eliminar!'
            ];
            $this->emit('alertaSistema', $datos);
        } else {
            $ruta = str_replace('storage', 'public', Tarea::where('id', $id)->value('ruta_archivo'));
            Storage::delete($ruta);
            Tarea::destroy($id);
            $datos = [
                'modo' => 'success',
                'mensaje' => 'Tarea Eliminada'
            ];
            $this->emit('alertaSistema', $datos);
        }
    }
}
