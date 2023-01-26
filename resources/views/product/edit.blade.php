    <div class="py-3">
        <h2 class="text-center"> Update Product</h2>
    </div>
    <form class="row g-3 m-auto" autocomplete="off" action="{{ route('products.update', ['product' => $product->id]) }}"
        method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="input-group">
            <spna class="fw-bold input-group-text justify-content-center"> Name</spna>
            <input type="text" class="form-control" name="name" value="{{ $product->name }}"
                id="name" placeholder="enter product name">
        </div>
        <div class="input-group">
            <spna class="fw-bold input-group-text justify-content-center"> price</spna>
            <input type="number" class="form-control" name="price" id="price"
                value="{{ $product->price }}" placeholder="enter product price">
        </div>
        <div class="input-group">
            <spna class="fw-bold input-group-text justify-content-center">image</spna>
            <input type="file" name="photo" class="form-control" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Update </button>
    </form>
