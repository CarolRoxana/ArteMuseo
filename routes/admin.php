<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ObraController;
use App\Http\Controllers\ArtistaControler;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\PreguntaController;

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

Route::get('/', [ObraController::class, 'index']);

Route::get('/usuarios', [UsuarioController::class, 'index']);

Route::get('/usuarios_registrado', [UsuarioController::class, 'index_registrado']);

Route::get('/usuario', function () {
    return view('admin.usuario');
});

Route::get('/obras', [ObraController::class, 'index']);

Route::get('/obras_registro', [ObraController::class, 'index_registrado']);

Route::get('/obras_filtro', [ObraController::class, 'index_filtro']);

Route::get('/obra', function () {
    return view('admin.obra');
});

Route::get('/artistas', [ArtistaControler::class, 'index']);

Route::get('/artista', function () {
    return view('admin.artista');
});
Route::post('/artista', [ArtistaControler::class, 'store']);
Route::get('/artista/edit/{id}', [ArtistaControler::class, 'edit']);
Route::put('/artista/update/{id}', [ArtistaControler::class, 'update']);
Route::delete('/artista/{id}', [ArtistaControler::class, 'destroy']);

Route::get('/generos', [GeneroController::class, 'index']);

Route::get('/genero', function () {
    return view('admin.genero');
});
Route::post('/genero', [GeneroController::class, 'store']);
Route::get('/genero/edit/{id}', [GeneroController::class, 'edit']);
Route::put('/genero/update/{id}', [GeneroController::class, 'update']);
Route::delete('/genero/{id}', [GeneroController::class, 'destroy']);

Route::get('/preguntas', [PreguntaController::class, 'index']);

Route::get('/preguntas_registrado', [PreguntaController::class, 'index_registrado']);

Route::get('/pregunta', function () {
    return view('admin.pregunta');
});
