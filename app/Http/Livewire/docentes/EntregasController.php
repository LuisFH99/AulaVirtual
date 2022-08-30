<?php

namespace App\Http\Livewire\Docentes;

use App\Models\Entregable;
use App\Models\Persona;
use App\Models\Tarea;
use Livewire\Component;

use Livewire\WithPagination;

class EntregasController extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $tarea_id;
    public $vermodal = false;
    public $name_student;
    public $qualification;
    public $deliverable_id;

    public function mount()
    {
        $this->tarea_id = request('idtarea');
    }

    public function render()
    {
        $tarea = Tarea::findOrFail($this->tarea_id);
        // $matriculados = Matricula::where('publicacion_id', $tarea->modulo->publicacion->id);
        $entregas = Persona::select('personas.nombres', 'personas.apellidos', 'entregable.ruta', 'entregable.nota', 'entregable.id')
            ->join('estudiantes', 'personas.id', 'estudiantes.persona_id')
            ->join('matricula', 'estudiantes.id', 'matricula.estudiantes_id')
            ->where('matricula.publicacion_id', $tarea->modulo->publicacion->id)
            ->leftjoin('entregable', function ($join) {
                $join->on('matricula.id', '=', 'entregable.matricula_id')
                    ->where('entregable.tarea_id', $this->tarea_id);
            })
            // ->paginate(10);
            ->get();

        return view('livewire.docentes.entregas.view', compact('tarea', 'entregas'));
    }

    public function showModal($student, $id)
    {
        if ($id == 0) {
            $datos = [
                'modo' => 'error',
                'mensaje' => 'El estudiante no Envió su Actividad'
            ];
            $this->emit('alertaSistema', $datos);
            return;
        }
        $this->name_student = $student;
        $this->deliverable_id=$id;
        $this->vermodal = true;
    }
    public function cancelar()
    {
        $this->reset([
            'vermodal', 'name_student'
        ]);
    }

    public function calificar()
    {
        Entregable::where('id', $this->deliverable_id)->update(['nota' => $this->qualification]);
        $datos = [
            'modo' => 'success',
            'mensaje' => 'Calificacion registrada'
        ];
        $this->emit('alertaSistema', $datos);
        $this->cancelar();
    }
}
