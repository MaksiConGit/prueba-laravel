<?php

use App\Http\Controllers\AlumnoController;
use App\Models\Alumno;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('alumno', AlumnoController::class)
    ->names('alumno');
