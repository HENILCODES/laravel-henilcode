<title>Product | Edit</title>
@extends('layout')
@section('body')
    <div class="container my-3 w-25 mt-5">
        <div class="py-3">
            <h2 class="text-center">Update Product</h2>
        </div>
        <form class="row g-3 m-auto" autocomplete="off" action="{{ route('product.update',['product' => $product->id]) }}" method="post"
            enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="input-group">
                <spna class="fw-bold input-group-text justify-content-center"> Name</spna>
                <input required type="text" class="form-control" name="name" value="{{ $product->name }}"
                    id="name" placeholder="enter product name">
            </div>
            <div class="input-group">
                <spna class="fw-bold input-group-text justify-content-center"> price</spna>
                <input required type="number" class="form-control" name="price" id="price"
                    value="{{ $product->price }}" placeholder="enter product price">
            </div>
            <div class="input-group">
                <spna class="fw-bold input-group-text justify-content-center">image</spna>
                <input type="file" name="photo" class="form-control" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection
