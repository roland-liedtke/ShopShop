<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }


    public function show($id)
    {
//        $product = Product::findOrFail($id);
//        return view('product', compact('product'));

        $product = Product::with(['comments.user', 'ratings.user'])->findOrFail($id);
        $averageRating = $product->ratings->avg('rating');

        return view('product', compact('product', 'averageRating'));
    }


    public function create()
    {
        return view('admin.products.create');
    }

    public function add(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image_url' => 'nullable|url',
        ]);

        Product::create($request->all());

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image_url' => 'nullable|url',
        ]);

        $product->update($request->all());

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    public function remove(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }
}
