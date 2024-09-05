<?php

use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InicioController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeController::class);
Route::get('/inicio', InicioController::class);
Route::get('/alumnos', [AlumnosController::class, 'index']);
Route::get('/alumnos/añadir', [AlumnosController::class, 'añadir']);
Route::get('/alumnos/{alumno}/{carrera}', [AlumnosController::class, 'alumnoCarrera']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{category_id}', [CategoryController::class, 'category']);


//Get
//Post
//Put
//Patch
//Delete

Route::get('prueba', function(){

    // Crear registro
    // $category = new Category;
    // $category->name = 'Prueba3';
    // $category->beneficios = 'Prueba :p3';
    // $category->save();

    // Consultar registros
    // $category = Category::all();

    // Eliminar registro
    // $category = Category::where('name', 'Prueba')->delete();
 
    // Filtrar por id
    $category = Category::find(1);

    // Actualizar filtrar por valor en registro
    // $category = Category::where('name', 'prueba')->first();
    // $category->beneficios = 'Actualizacion';
    // $category->save();

    // Filtrar por condición
    // $category = Category::where('id', '<', '3')->get();

    // Filtrar por orden y obteniendo campos específicos
    // $category = Category::orderBy('id', 'desc',)->select('id', 'name')->get();

    // Filtrar por orden y obteniendo campos específicos pero obteniendo un número limitado
    // $category = Category::orderBy('id', 'desc',)->select('id', 'name')->take(2)->get();

    return $category->fecha_rara->format('d/m/Y');

});