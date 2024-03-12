<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\ManyProductsInSubcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if($request->search)
        {
            $products = Product::search($request->search)->get();
        }
        else
        {
            $products = Product::get();
        }
        $categories = Category::all();
        $manyproductsincategories = ManyProductsInSubcategory::all();
        return view("main", ['products' => $products, 'categories' => $categories, 'manyproductsincategories' => $manyproductsincategories]);
    }
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::find($id);
        if($product == null){
            return abort(404);
        }
        else{
           dd($product->category); // return view('product.showproduct', ['product' => $product]);
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
