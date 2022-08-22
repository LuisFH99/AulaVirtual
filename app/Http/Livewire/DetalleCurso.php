<?php

namespace App\Http\Livewire;

use App\Models\Examen;
use App\Models\Publicacion;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class DetalleCurso extends Component
{
    public $publicacion_id;

    public function mount()
    {
        $this->publicacion_id = request('idpublicacion');
    }

    public function render()
    {
        $publicacion = Publicacion::where('id', $this->publicacion_id)->first();
        $exmenfinal = $publicacion->examen->where('is_final', 1)->first();
        // dd($exmenfinal);
        return view('livewire.detallecurso.view', compact('publicacion', 'exmenfinal'));
    }

    public function darExamen($idExamen)
    {
        session(['idexamen' => $idExamen]);
        return redirect()->route('examen.index');
    }
}
