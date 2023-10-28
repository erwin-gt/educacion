<?php

use App\Http\Controllers\CarreraController;
use App\Http\Controllers\SemestreController;
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

/*
route::get('/alumnos', "App\Http\Controllers\AlumnoController@obtenerAlumnos");
Auth::routes();*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('home',CarreraController::class);