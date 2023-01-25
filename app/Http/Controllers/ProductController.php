<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index', ['products' => Product::all()]);
    }
    public function create()
    {
        return view('product.add');
    }
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('product.index');
    }
    public function show($id)
    {
        return view('product.index', ['product' => Product::find($id)]);
    }
    public function edit($id)
    {
        return view('product.edit', ['product' => Product::find($id)]);
    }
    public function update(Request $request, $id)
    {
        $products = $request->except(['_method', '_token']);
        Product::where('id', $id)->update($products);
        return redirect()->route('product.index');
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
