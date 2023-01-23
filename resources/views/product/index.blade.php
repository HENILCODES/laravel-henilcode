<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>

    {{-- Edit Product  --}}
    @if (isset($editProduct))
        <div class="modal" id="EditProduct">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Product</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3 m-auto" autocomplete="off" action="/product/" method="put"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="input-group">
                                <spna class="input-group-text justify-content-center"> Name</spna>
                                <input required type="text" class="form-control" name="name"
                                    placeholder="enter product name" value="{{ $editProduct->name }}">
                            </div>
                            <div class="input-group">
                                <spna class="input-group-text justify-content-center"> price</spna>
                                <input required type="number" class="form-control" name="price"
                                    placeholder="enter product price" value="{{ $editProduct->price }}">
                            </div>
                            <div class="input-group">
                                <spna class="input-group-text justify-content-center">image</spna>
                                <input type="file" name="photo" class="form-control" accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <a type="button" class="btn btn-secondary" href="/product/">Close</a> {{-- Click Close to redirect index --}}
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- Add New Product --}}
    <div class="modal" id="AddProduct">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">New Product</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="container my-3">
                        <form class="row g-3 m-auto" autocomplete="off" action="/product/" method="post"
                            enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="input-group">
                                <spna class="input-group-text justify-content-center"> Name</spna>
                                <input required type="text" class="form-control" name="name"
                                    placeholder="enter product name">
                            </div>
                            <div class="input-group">
                                <spna class="input-group-text justify-content-center"> price</spna>
                                <input required type="number" class="form-control" name="price"
                                    placeholder="enter product price">
                            </div>
                            <div class="input-group">
                                <spna class="input-group-text justify-content-center">image</spna>
                                <input type="file" name="photo" class="form-control" accept="image/*">
                            </div>
                            <div class="mt-5 text-center">
                                <button class="btn btn-primary">Add Product</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <section style="background-color: #eee;" class="shadow rounded ps-5 pe-5">
            <div class="container my-5 py-4">
                <div class="text-center">
                    <h2 class="fw-bold">Product</h2>
                </div>
                <div class="text-end pb-4 d-flex justify-content-between">
                    <input type="search" autocomplete="off" class="form-control w-25 me-5" id="search"
                        placeholder="search">
                    <button class="btn btn-success shadow" data-bs-toggle="modal"
                        data-bs-target="#AddProduct">Add</button>
                </div>
                <div class="overflow-auto" style="height: 600px;">

                    <table class="table table-primary text-center table-responsive table-bordered">
                        <thead class="table-borderless table-dark">
                            <th>ID</th>
                            <th>Name</th>
                            <th>price</th>
                            <th>photo</th>
                            <th>Update time</th>
                            <th>Create time</th>
                            <th>Action</th>
                        </thead>
                        <tbody id="Search_table" class="overflow-auto">
                            @if (isset($products))
                                @foreach ($products as $key => $value)
                                    <tr>
                                        <td> {{ $value->id }}</td>
                                        <td> {{ $value->name }}</td>
                                        <td> {{ $value->price }}</td>
                                        <td> {{ $value->photo }}</td>
                                        <td> {{ $value->updated_at }}</td>
                                        <td> {{ $value->created_at }}</td>
                                        <td class="d-flex">
                                            {{-- Edit Form data button --}}
                                            <a class="btn btn-success shadow bi bi-pencil me-3"
                                                href="/product/{{ $value->id }}/edit"></a>
                                            {{-- <form action="/photo/" method="DELETE"> --}}
                                            {{-- Delete Form data button --}}
                                            {{-- @method('DELETE') --}}
                                            {{-- @csrf --}}
                                            {{-- <input type="hidden" name="id" value="{{ $value->id }}"> --}}
                                            {{-- <button type="submit" class="btn btn-danger bi bi-trash"></button> --}}
                                            <a class="btn btn-danger bi bi-trash"
                                                href="{{ route('product.destroy', [$value->id]) }}" data-method="delete"></a>
                                            {{-- </form> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<script src="../js/search.js"></script>

@if (isset($create))
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#AddProduct').modal('show');
        });
    </script>
@endif
@if (isset($editProduct))
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#EditProduct').modal('show');
        });
    </script>
@endif

</html>
