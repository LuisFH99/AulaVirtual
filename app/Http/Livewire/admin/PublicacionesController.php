<?php

namespace App\Http\Livewire\Admin;

use App\Models\Publicacion;
use Livewire\Component;

class PublicacionesController extends Component
{
    public function render()
    {
        $publicaciones = Publicacion::orderBy('fecha_fin', 'desc')->get();
        return view('livewire.admin.publicaciones.view', compact('publicaciones'));
    }

    public function matricula($idpublicacion)
    {
        // dd($idpublicacion);

        session(['idpublicacion' => $idpublicacion]);

        return redirect()->route('admin.matricula.index');;
    }
}
