<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});





Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/perfil', function () {
        return view('web.perfil');
    });
    Route::view('/cursos', 'livewire.cursos.index')->name('curso.index');
    Route::view('/curso/{idpublicacion}', 'livewire.detallecurso.index')->name('detallecurso.index');
    Route::view('/curso/tema/{idtema}', 'livewire.temas.index')->name('tema.index');
    Route::view('/curso/tarea/{idtarea}', 'livewire.tareas.index')->name('tarea.index');
    Route::view('/curso/tarea/{idtarea}/entrega/{idmatricula}', 'livewire.entregables.index')->name('entregable.index');
    Route::view('/curso/examen/cuestionario', 'livewire.examen.index')->name('examen.index');
    //Route::get('/cursos',  function () {return view('web.cursos');});
    Route::view('/curso/foro/{idforo}', 'livewire.foros.index')->name('foro.index');

    Route::view('/docente/cursos', 'livewire.docentes.cursos.index')->name('docentes.curso.index');
    Route::view('/docente/curso/{idpublicacion}', 'livewire.docentes.publicacion.index')->name('docentes.publicacion.index');
    Route::view('/docente/entrega/tarea/{idtarea}', 'livewire.docentes.entregas.index')->name('docentes.entregas.index');
    Route::view('/docente/examen/cuestionario', 'livewire.docentes.cuestionario.index')->name('docentes.cuestionario.index');
    Route::view('/docente/examen/resultados', 'livewire.docentes.resultado.index')->name('docentes.resultado.index');
    Route::view('/docente/curso/evaluacion/calificaciones', 'livewire.docentes.calificacion.index')->name('docentes.calificacion.index');



    Route::view('/gestion/estudiantes', 'livewire.admin.estudiantes.index')->name('admin.estudiantes.index');
    // Route::view('/administrador', 'livewire.admin.docente.index')->name('admin.estudiantes.index');
    Route::view('/gestion/docentes', 'livewire.admin.docentes.index')->name('admin.docentes.index');
    Route::view('/gestion/cursos', 'livewire.admin.cursos.index')->name('admin.cursos.index');
    Route::view('/gestion/publicaciones', 'livewire.admin.publicaciones.index')->name('admin.publicaciones.index');
    Route::view('/gestion/matriculados', 'livewire.admin.matricula.index')->name('admin.matricula.index');
    Route::view('/gestion/modulos', 'livewire.admin.modulos.index')->name('admin.modulos.index');
    Route::view('/gestion/temas', 'livewire.admin.temas.index')->name('admin.temas.index');
    Route::view("/Miscertificados",'web.certificados')->name('Miscertificados');

});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::view('/cursosDetalle', 'web.cursoDetalle') -> generado;
// Route::view('/cursoVideo','web.cursoVideo')-> generado;
Route::view('/tareas', 'web.cursoTarea');
Route::view('/entrega', 'web.entrega');

/*Vista para el docente*/
Route::view('/cursosDocentes', 'web.cursoDocente');
Route::view('/CrearTarea','web.CrearTarea');
Route::view('/CrearRecursos','web.CrearRecursos');
Route::view('/CrearClase','web.CrearClase');
Route::view("/Cuestionario",'web.Cuestionario');

/*Revision de tareas actualizacion 11-08-2022*/
Route::view("/revisionTareas",'web.revisionTareas');
Route::view("/listaRevision",'web.listaRevision');

Route::view("/foros/{id}",'web.foro')->name('foro');

/* prueba QR */
Route::get('/qr_qenerate', [App\Http\Controllers\qrController::class, 'qr_qenerate'])->name('qr_qenerate');

/*Certificado en pdf */
Route::get('/certificado/{id}', [App\Http\Controllers\ExportController::class, 'reportCertificado'])->name('reportCertificado');
Route::get('/download/{id}', [App\Http\Controllers\ExportController::class, 'downloadCertificado'])->name('downloadCertificado');

/*Vista cuando se pase el QR */
Route::view("/certificado/detalle/{idcertificado}",'vercertificado')->name('vercertificado');

