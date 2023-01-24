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
        Product::create([
            'name' => $request['name'],
            'price' => $request['price'],
            'photo' => $_FILES['photo']['name']
        ]);
        return redirect('product/');
    }
    public function show($id)
    {
        return Product::where('id', $id);
    }
    public function edit($id)
    {
        return view('product.edit', ['product' => Product::find($id)]);
    }
    public function update(Request $request, $id)
    {
        Product::where('id', $id)->update(['name' => $request['name'], 'price' => $request['price']]);
        return redirect('product/');
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }
}
