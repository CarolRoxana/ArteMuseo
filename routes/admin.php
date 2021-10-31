<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ObraController;
use App\Http\Controllers\ArtistaControler;

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
Route::get('/', function(){
    return view('admin.home');
});

Route::get('/usuarios', [UsuarioController::class, 'index']);

Route::get('/usuario', function(){
    return view('admin.usuario');
});

Route::get('/obras', [ObraController::class, 'index']);

Route::get('/obra', function(){
    return view('admin.obra');
});

Route::get('/artistas', [ArtistaControler::class, 'index']);

Route::get('/artista', function(){
    return view('admin.artista');
});