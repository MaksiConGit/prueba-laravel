<?php

use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InicioController;
use App\Models\Category;
use App\Models\ManyRelation;
use App\Models\ManyRelationModel;
use App\Models\RelationTable;
use Illuminate\Support\Facades\Route;


Route::resource('categories', CategoryController::class)->names('categories');

Route::get('relation', function(){
    $category = Category::where('id', '1')->with('relationtable')->first();
    return $category;

    // $relationtable = RelationTable::find(2);
    // return $relationtable->category;
});

Route::get('manyrelation', function(){

    $category = Category::find(1);
    return $category->manyrelation;

    // $manyrelation = ManyRelation::find(1);
    // return $manyrelation->category;

    // $category = Category::find(1);
    // $category->manyrelation()->create(['name' => 'lala']);

});