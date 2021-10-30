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
Route::get('/', function(){
    return view('admin.home');
});

Route::get('/usuarios', function(){
    return view('admin.usuarios');
});

Route::get('/usuario', function(){
    return view('admin.usuario');
});

Route::get('/obras', function(){
    return view('admin.obras');
});

Route::get('/obra', function(){
    return view('admin.obra');
});