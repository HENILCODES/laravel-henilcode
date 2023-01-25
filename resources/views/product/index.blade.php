<title>Product</title>

<body>
    @extends('layout')
    {{-- Edit Product  --}}
    @section('body')
        <div class="container">
            <section style="background-color: #eee;" class="shadow rounded ps-5 pe-5">
                <div class="container my-5 py-4">
                    <div class="text-center">
                        <h2 class="fw-bold">Product</h2>
                    </div>
                    <div class="text-end pb-4 d-flex justify-content-between">
                        <input type="search" autocomplete="off" class="form-control w-25 me-5" id="search"
                            placeholder="search">
                        <a class="btn btn-success shadow" href="{{ route('product.create') }}">Add</a>
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
                                @if (isset($product))
                                    <tr>
                                        <td> {{ $product->id }}</td>
                                        <td> {{ $product->name }}</td>
                                        <td> {{ $product->price }}</td>
                                        <td> {{ $product->photo }}</td>
                                        <td> {{ $product->updated_at }}</td>
                                        <td> {{ $product->created_at }}</td>
                                        <td>
                                            {{-- Edit Form data button --}}
                                            <form action="{{ route('product.destroy',['product'=>$product->id])}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('product.edit', ['product' => $product->id]) }}"
                                                    class="btn btn-success shadow bi bi-pencil me-3 editBT"></a>
                                                <button type="submit" class="btn btn-danger bi bi-trash"></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                                @if (isset($products))
                                    @foreach ($products as $key => $value)
                                        <tr>
                                            <td> {{ $value->id }}</td>
                                            <td> {{ $value->name }}</td>
                                            <td> {{ $value->price }}</td>
                                            <td> {{ $value->photo }}</td>
                                            <td> {{ $value->updated_at }}</td>
                                            <td> {{ $value->created_at }}</td>
                                            <td>
                                                {{-- Edit Form data button --}}
                                                <form action="{{ route('product.destroy',['product'=>$value->id])}}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <a href="{{ route('product.show', ['product' => $value->id]) }}"
                                                        class="btn btn-primary bi bi-eye"></a>
                                                    <a href="{{route('product.edit',['product'=>$value->id])}}"
                                                        class="btn btn-success shadow bi bi-pencil me-3 editBT"></a>
                                                    <button type="submit" class="btn btn-danger bi bi-trash"></button>  {{--delete button--}}
                                                </form>
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

    </html>
@endsection
