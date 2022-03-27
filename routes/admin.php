<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ObraController;
use App\Http\Controllers\ArtistaControler;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\ModuloController;
use App\Http\Controllers\PermisoController;


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
Route::get('/usuario', [UsuarioController::class, 'create']);
Route::post('/usuario', [UsuarioController::class, 'store']);

Route::get('/obras/{estado}', [ObraController::class, 'indexBase']);
Route::get('/obras', [ObraController::class, 'index']);
Route::get('/obras_filtro', [ObraController::class, 'index_filtro']);
Route::get('/obra', [ObraController::class, 'create']);
Route::post('/obra', [ObraController::class, 'store']);
Route::get('/obraDetalles/{id}', [ObraController::class, 'obraDetalle']);
Route::get('/obraGestionarDetalles/{id}', [ObraController::class, 'obraGestionarDetalle']);
Route::post('/obraDetallesStore', [ObraController::class, 'obraDetalleStore']);
Route::delete('/obraDetalles/{obre}/{id}', [ObraController::class, 'obraDetalleDestroy']);

Route::get('/artistas', [ArtistaControler::class, 'index']);
Route::get('/artista', function () {
    return view('admin.artista');
});
Route::post('/artista', [ArtistaControler::class, 'store']);
Route::get('/artista/edit/{id}', [ArtistaControler::class, 'edit']);
Route::post('/artista/update/{id}', [ArtistaControler::class, 'update']);
Route::delete('/artista/{id}', [ArtistaControler::class, 'destroy']);

Route::get('/generos', [GeneroController::class, 'index']);
Route::get('/genero', function () {
    return view('admin.genero');
});
Route::post('/genero', [GeneroController::class, 'store']);
Route::get('/genero/edit/{id}', [GeneroController::class, 'edit']);
Route::put('/genero/update/{id}', [GeneroController::class, 'update']);
Route::delete('/genero/{id}', [GeneroController::class, 'destroy']);
Route::get('/generoDetalle/{id}', [GeneroController::class, 'generoDetalle']);
Route::post('/generoDetalleStore', [GeneroController::class, 'generoDetalleStore']);
Route::delete('/generoDetalle/{genero}/{id}', [GeneroController::class, 'generoDetalleDestroy']);

Route::get('/preguntas', [PreguntaController::class, 'index']);
Route::get('/preguntas_registrado', [PreguntaController::class, 'index_registrado']);
Route::get('/pregunta', function () {
    return view('admin.pregunta');
});

Route::get('/facturas', [FacturaController::class, 'index']);
Route::get('/factura', function () {
    return view('admin.factura');
});

Route::post('/factura', [FacturaController::class, 'store']);

Route::get('/roles', [RolController::class, 'index']);
Route::get('/rol', function () {
    return view('admin.rol');
});
Route::post('/rol', [RolController::class, 'store']);
Route::get('/rolPermisos/{id}', [RolController::class, 'rolPermiso']);
Route::post('/rolPermisosStore', [RolController::class, 'rolPermisoStore']);
Route::delete('/rolPermisos/{rol}/{id}', [RolController::class, 'rolPermisoDestroy']);
Route::get('/rol/edit/{id}', [RolController::class, 'edit']);
Route::put('/rol/update/{id}', [RolController::class, 'update']);
Route::delete('/rol/{id}', [RolController::class, 'destroy']);

Route::get('/permisos', [PermisoController::class, 'index']);
Route::get('/permiso', [PermisoController::class, 'create']);
Route::post('/permiso', [PermisoController::class, 'store']);
Route::get('/permiso/edit/{id}', [PermisoController::class, 'edit']);
Route::put('/permiso/update/{id}', [PermisoController::class, 'update']);
Route::delete('/permiso/{id}', [PermisoController::class, 'destroy']);

Route::get('/modulos', [ModuloController::class, 'index']);
Route::get('/modulo', function () {
    return view('admin.modulo');
});
Route::post('/modulo', [ModuloController::class, 'store']);
Route::get('/modulo/edit/{id}', [ModuloController::class, 'edit']);
Route::put('/modulo/update/{id}', [ModuloController::class, 'update']);
Route::delete('/modulo/{id}', [ModuloController::class, 'destroy']);
