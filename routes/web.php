<?php

use App\Http\Controllers\AlumnoController;
use App\Models\Alumno;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/Alumnos', [AlumnoController::class, 'index'])->name('alumno.index');

Route::get('/CrearAlumno', [AlumnoController::class, 'indexCreate'])->name('alumno.create');
Route::post('/creacionAlumno', [AlumnoController::class, 'create']);

Route::get('/Alumno_{alumno}', [AlumnoController::class, 'alumnoIndex'])->name('alumno.stats');

Route::get('/EditarAlumno_{alumno}', [AlumnoController::class, 'indexEdit'])
    ->name('alumno.edit');
Route::put('/editAlumno/{alumno}', [AlumnoController::class, 'edit']);

Route::delete('/delete/{alumno}', [AlumnoController::class, 'delete' ]);
