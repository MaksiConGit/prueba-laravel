<?php

use App\Http\Controllers\alumnoController;
use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [indexController::class, 'index']);
Route::get('/alumno', [alumnoController::class, 'index']);
Route::get('/alumno/create', [alumnoController::class, 'alumnoCreate']);

Route::get('/alumno/{userID}', [alumnoController::class, 'indexID']);





//Get
//Post
//Put
//Patch
//Delete