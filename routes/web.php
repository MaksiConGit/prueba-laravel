<?php

use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeController::class);
Route::get('/inicio', InicioController::class);
Route::get('/alumnos', [AlumnosController::class, 'index']);
Route::get('/alumnos/añadir', [AlumnosController::class, 'añadir']);
Route::get('/alumnos/{alumno}/{carrera}', [AlumnosController::class, 'alumnoCarrera']);

//Get
//Post
//Put
//Patch
//Delete