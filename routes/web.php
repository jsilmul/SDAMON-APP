<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('inicio', \App\Http\Controllers\HomeController::class)->middleware('auth');
Route::resource('alumnos', \App\Http\Controllers\AlumnoController::class)->middleware('auth');
Route::resource('cursos', \App\Http\Controllers\CursoController::class)->middleware('auth');;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
