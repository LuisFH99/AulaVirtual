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
    
    Route::get('/perfil', function () {return view('web.perfil');});
    Route::view('/cursos', 'livewire.cursos.index')->name('curso.index');
    Route::view('/curso/{idpublicacion}', 'livewire.detallecurso.index')->name('detallecurso.index');
    //Route::get('/cursos',  function () {return view('web.cursos');});

    Route::view('/gestion/estudiantes', 'livewire.admin.estudiantes.index')->name('admin.estudiantes.index');
    // Route::view('/administrador', 'livewire.admin.docente.index')->name('admin.estudiantes.index');
    Route::view('/gestion/docentes', 'livewire.admin.docentes.index')->name('admin.docentes.index');
    Route::view('/gestion/cursos', 'livewire.admin.cursos.index')->name('admin.cursos.index');
   	Route::view('/gestion/publicaciones', 'livewire.admin.publicaciones.index')->name('admin.publicaciones.index');
   
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/cursosDetalle', 'web.cursoDetalle');
Route::view('/cursoVideo','web.cursoVideo');
Route::view('/tareas','web.cursoTarea');
Route::view('/entrega','web.entrega');
/*Vista para el docente*/
Route::view('/cursosDocentes', 'web.cursoDocente');
Route::view('/CrearTarea','web.CrearTarea');
Route::view('/CrearRecursos','web.CrearRecursos');
Route::view('/CrearClase','web.CrearClase');
