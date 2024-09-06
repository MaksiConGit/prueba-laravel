<?php

use App\Http\Controllers\AlumnoController;
use App\Models\Alumno;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/alumno', [AlumnoController::class, 'index']);

Route::get('/alumno/create', [AlumnoController::class, 'indexCreate']);
Route::post('/creacionAlumno', [AlumnoController::class, 'create']);

Route::get('/alumno/{alumno}', [AlumnoController::class, 'alumnoIndex']);

Route::get('/alumno/{alumno}/edit', [AlumnoController::class, 'indexEdit']);
Route::put('/editAlumno/{alumno}', [AlumnoController::class, 'edit']);

Route::delete('/alumno/{alumno}', [AlumnoController::class, 'delete' ]);
