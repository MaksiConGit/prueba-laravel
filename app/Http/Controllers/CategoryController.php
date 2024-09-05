<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('categories', compact('categories'));
    }

    public function category($category_id){
        $category = Category::find($category_id);
        return view('category', compact('category'));
    }

}
