<title>Product | Add</title>
@extends('layout')
@section('body')
    <div class="container my-3 w-25 mt-5">
        <div class="py-3">
            <h2 class="text-center">New Product</h2>
        </div>
        <form class="row g-3 m-auto" autocomplete="off" action="{{ route('product-store') }}" method="post"
            enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="input-group">
                <spna class="fw-bold input-group-text justify-content-center"> Name</spna>
                <input required type="text" class="form-control" name="name"
                    placeholder="enter product name">
            </div>
            <div class="input-group">
                <spna class="fw-bold input-group-text justify-content-center"> price</spna>
                <input required type="number" class="form-control" name="price"
                    placeholder="enter product price">
            </div>
            <div class="input-group">
                <spna class="fw-bold input-group-text justify-content-center">image</spna>
                <input type="file" name="photo" class="form-control" required accept="image/*">
            </div>
            <div class="mt-5 text-center">
                <button class="btn btn-primary">Add Product</button>
            </div>
        </form>
    </div>
@endsection
