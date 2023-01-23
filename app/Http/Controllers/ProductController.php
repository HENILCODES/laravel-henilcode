<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = new Product();
        $products = $product::all();
        return view('product.index')->with('products', $products);
    }
    public function create()
    {
        return view('product.index')->with('create', true);
    }
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request['name'];
        $product->price = $request['price'];
        $product->photo = $_FILES['photo']['name'];
        $product->save();
        return redirect('product/');
    }
    public function show($id)
    {
        $product = Product::find($id);
        echo "<pre>";
        print_r($product->id);
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return $product;
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        // $product->name = $request['name'];
        // $product->price = $request['price'];
        // $product->photo = $request['photo'];

        $input = $request->all();
        $product->fill($input)->save();
        // return view('product.index');
        return "Edit";
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }
}
