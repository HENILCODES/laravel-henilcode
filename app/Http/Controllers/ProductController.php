<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }
    public function create()
    {
        return view('product.create-update');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'price' => 'required',
            'photo' => 'required|image'
        ]);
        $products = $request->all();
        $imageName = $request->photo->getClientOriginalName();
        // $request->photo->move('upload/', $imageName);
        $products['photo'] = $imageName;
        Product::create($products);
        return redirect()->route('products.index');
    }
    public function show($id)
    {
        return view('product.index', ['product' => Product::find($id)]);
    }
    public function edit($id)
    {
        return view('product.create-update', ['product' => Product::find($id)]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:5|unique:products,name',
            'price' => 'required',
            'photo' => 'image|mimes:png|size:100'
        ]);

        $products = $request->all();
        if ($request->photo) {
            $imageName = $request->photo->getClientOriginalName();
            $request->photo->move('upload/', $imageName);
            $products['photo'] = $imageName;
            $updateProduct = $products;
        } else {
            $updateProduct = $products;
        }
        Product::find($id)->update($updateProduct);
        return redirect()->route('products.index');
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
