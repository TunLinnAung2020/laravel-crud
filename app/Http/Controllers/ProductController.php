<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // for product list
    public function index()
    {
        $products = Product::all();
        return view('products.list', compact('products'));
    }

    //for product create
    public function create()
    {
        return view('products.create');
    }

    //for product store
    public function store(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'quality' => 'required',
            'quatity' => 'required',
            'description' => 'required',
        ]);
        // dd($request->all());
        Product::create($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    //for product detail
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    //for product edit
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    //for product update and route modle binding
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'quality' => 'required',
            'quatity' => 'required',
            'description' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    //for product list delete
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}
