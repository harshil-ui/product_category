<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::with('products')->get();
        
        return view('category.index', ['categories' => $category]);
    }


}
