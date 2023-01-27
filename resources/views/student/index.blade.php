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
                    <h1>Student</h1>
                </div>
                <a class="ms-2 btn btn-success bi bi-plus-square fs-3" href="{{ route('student.create') }}"></a>
            </div>
            <thead class="table-borderless text-center table-dark">
                <th>ID</th>
                <th>Photo</th>
                <th>Student Name</th>
                <th>Student Email</th>
                <th>Contact</th>
                <th>Semester</th>
                <th>Date of Birth</th>
                <th>Action </th>
            </thead>
            <tbody class="text-center">
                @foreach ($students as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td><img src="upload/{{ $item->photo }}" width="50px" height="50px" alt=""></td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->contact }}</td>
                        <td>{{ $item->semester }}</td>
                        <td>{{ $item->dob }}</td>
                        <td>
                            <form action="{{ route('student.destroy', ['student' => $item->id]) }}" method="post">
                                @method('delete')
                                @csrf
                                <a href="{{ route('student.edit', ['student' => $item->id]) }}"
                                    class="bi bi-pencil btn btn-warning"></a>
                                <a href="{{ route('student.show', ['student' => $item->id]) }}"
                                    class="bi bi-eye btn btn-primary"></a>
                                <button type="submit" class="bi bi-trash btn btn-danger"></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
