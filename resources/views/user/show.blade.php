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
                <a class="text-start btn btn-success bi bi-arrow-left-square fs-3" href="{{ route('user.index') }}"></a>
                <div class="text-center w-100">
                    <h1>Student Details</h1>
                </div>
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
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->password }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->roll }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td>
                        <a href="{{ route('user.edit', ['user' => $user->id]) }}" class="btn btn-warning bi bi-pencil"></a>
                        <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger bi bi-trash"></button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
