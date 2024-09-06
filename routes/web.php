<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/alumno', [AlumnoController::class, 'index']);

Route::get('/alumno/{alumno}', [AlumnoController::class, 'alumnoIndex']);
