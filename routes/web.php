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
    Route::view('/cursos', 'livewire.cursos.index')->name('curso.index');
    Route::get('/perfil', function () {return view('web.perfil');});
    //Route::get('/cursos',  function () {return view('web.cursos');});

    Route::view('/gestion/estudiantes', 'livewire.admin.estudiantes.index')->name('admin.estudiantes.index');
    // Route::view('/administrador', 'livewire.admin.docente.index')->name('admin.estudiantes.index');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/cursosDetalle', 'web.cursoDetalle');
