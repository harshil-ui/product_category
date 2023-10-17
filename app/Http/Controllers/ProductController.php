<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreproductRequest;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request('search')) {
            $products = Product::with('category')
                ->where('products.name', 'like', '%' . request('search') . '%')
                ->get();
        } else {
            $products = Product::with('category')
                ->simplePaginate(2);
        }
        return view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.form', ['category' => $this->getCategory()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreproductRequest $request)
    {
        Product::create($request->validated());
        return redirect(route('product-list'));
    }

    public function getCategory()
    {
        $category = Category::select('id', 'name')->get();
        return $category;
    }
}
