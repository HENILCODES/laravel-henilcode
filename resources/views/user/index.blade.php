@extends('layout')
@section('body')
    <style>
        .Fav_color {
            width: 50px;
            height: 50px;
            padding: 10px;
            margin: auto;
        }
    </style>
    <div class="p-1">
        <table class="table table-primary table-responsive table-bordered">
            <div class="p-3 d-flex  mx-5">
                <div class="text-center w-100">
                    <h1>Students</h1>
                </div>
                <a class="ms-2 btn btn-success bi bi-plus-square fs-3" href="{{ route('user.create') }}"></a>
            </div>
            <thead class="table-borderless text-center table-dark">
                <th>ID</th>
                <th>name</th>
                <th>password</th>
                <th>email</th>
                <th>roll</th>
                <th>create</th>
                <th>update</th>
                <th>Action </th>
            </thead>
            <tbody class="text-center">
                @foreach ($users as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->password }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->roll }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->updated_at }}</td>
                        <td>
                        <a href="{{route('user.show',['user'=>$item->id])}}" class="btn btn-primary bi bi-eye"></a>

                            <a href="{{ route('user.edit', ['user' => $item->id]) }}"
                                class="btn btn-warning bi bi-pencil"></a>
                            <form action="{{ route('user.destroy', ['user' => $item->id]) }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger bi bi-trash"></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
