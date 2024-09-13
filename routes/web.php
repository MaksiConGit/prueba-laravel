<?php

use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InicioController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;


Route::resource('categories', CategoryController::class)->names('categories');