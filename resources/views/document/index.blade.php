@extends('layout')
@section('body')
    <div class="p-1">
        <table class="table table-primary text-center table-responsive table-bordered">
            <div class="p-3 d-flex  mx-5">
                <div class="text-center w-100">
                    <h1>document</h1>
                </div>
                <a class="ms-2 btn btn-success bi bi-plus-square fs-3" href="{{ route('document.create') }}"></a>
            </div>
            <thead class="table-borderless table-dark">
                <th>Document Id</th>
                <th>Student ID</th>
                <th>Type</th>
                <th>Photo</th>
                <th>update</th>
                <th>Create</th>
                <th>Action </th>
            </thead>
            <tbody>
                @foreach ($document as $item)
                    <tr>
                        <td>{{ $item->id }} </td>
                        <td>{{ $item->student_id }} </td>
                        <td>{{ $item->type }} </td>
                        <td> <img src="{{ url('upload/document/' . $item->photo) }}" width="50px" height="50px"> </td>
                        <td>{{ $item->updated_at }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <form action="{{ route('document.destroy', ['document' => $item->id]) }}" method="post">
                                @method('delete')
                                @csrf
                                <a href="{{ route('document.edit', ['document' => $item->id]) }}"
                                    class="bi bi-pencil btn btn-warning"></a>
                                <button type="submit" class="bi bi-trash btn btn-danger"></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
