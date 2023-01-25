<title>Product | Edit</title>
@extends('layout')
@section('body')
    <div class="container my-3 w-25 mt-5">
        <div class="py-3">
            <h2 class="text-center"> {{ $product ? 'update' : 'New' }} Product</h2>
        </div>
        <form class="row g-3 m-auto" autocomplete="off"
            action="{{ $product ? route('products.update', ['product' => $product->id]) : route('products.store') }}"
            method="post" enctype="multipart/form-data">
            @if ($product)
                @method('PUT')
            @endif
            @csrf
            <div class="input-group">
                <spna class="fw-bold input-group-text justify-content-center"> Name</spna>
                <input required type="text" class="form-control" name="name"
                    value="{{ $product ? $product->name : '' }}" id="name" placeholder="enter product name">
            </div>
            <div class="input-group">
                <spna class="fw-bold input-group-text justify-content-center"> price</spna>
                <input required type="number" class="form-control" name="price" id="price"
                    value="{{ $product ? $product->price : '' }}" placeholder="enter product price">
            </div>
            <div class="input-group">
                <spna class="fw-bold input-group-text justify-content-center">image</spna>
                <input type="file" name="photo" class="form-control" @if (!$product) required @endif
                    accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary"> {{ $product ? 'update' : 'Add New' }} </button>
        </form>
    </div>
@endsection
