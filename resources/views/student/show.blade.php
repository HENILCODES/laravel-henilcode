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
        <div class="p-3 d-flex  mx-5">
            <a class="ms-2 btn btn-success bi bi-arrow-left-square fs-4" href="{{ route('student.index') }}"></a>
            <div class="text-center w-100">
                <h2>Student All Data</h2>
            </div>
        </div>
        <table class="table table-primary table-responsive table-bordered">
            <thead class="table-borderless text-center table-dark">
                <th>ID</th>
                <th>Student Name</th>
                <th>Student Email</th>
                <th>Student Password </th>
                <th>Contact</th>
                <th>Semester</th>
                <th>Hobby</th>
                <th>Gender</th>
                <th>Favorite Color</th>
                <th>Intrest in coding</th>
                <th>Date of Birth</th>
                <th>Website</th>
                <th>Photo</th>
                <th>Update</th>
                <th>Create</th>
                <th>Action</a>
                </th>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->password }}</td>
                    <td>{{ $student->contact }}</td>
                    <td>{{ $student->semester }}</td>
                    <td>{{ $student->hobby }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>
                        <div class="Fav_color shadow-lg border border-dark rounded"
                            style="background-color:{{ $student->color }};"></div>
                    </td>
                    <td>{{ $student->intrest }}</td>
                    <td>{{ $student->dob }}</td>
                    <td>{{ $student->url }}</td>
                    <td>{{ $student->photo }}</td>
                    <td>{{ $student->updated_at }}</td>
                    <td>{{ $student->created_at }}</td>
                    <td class="text-center">
                        <form action="{{ route('student.destroy', ['student' => $student->id]) }}" method="post">
                            @method('delete')
                            @csrf
                            <a href="{{ route('student.edit', ['student' => $student->id]) }}"
                                class="bi bi-pencil btn btn-warning"></a>
                            <button type="submit" class="bi bi-trash btn btn-danger"></button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
